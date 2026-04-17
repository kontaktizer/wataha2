#!/usr/bin/env python3
"""Generuje statyczny podgląd HTML z template-parts motywu (uproszczona konwersja PHP)."""

from __future__ import annotations

import re
import shutil
from pathlib import Path

ROOT = Path(__file__).resolve().parent
THEME_DIR = ROOT.parent / "sudecka-wataha"
THEME_PARTS = THEME_DIR / "template-parts"

SLUGS = [
    "o-nas",
    "jak-zostac-czlonkiem",
    "patent-strzelecki",
    "licencja-sportowa",
    "pozwolenie-na-bron",
    "kontakt",
]


def decode_php_single_quoted(raw: str) -> str:
    out: list[str] = []
    i = 0
    while i < len(raw):
        c = raw[i]
        if c == "\\" and i + 1 < len(raw):
            n = raw[i + 1]
            if n in ("\\", "'"):
                out.append(n)
                i += 2
                continue
        out.append(c)
        i += 1
    return "".join(out)


def extract_vars(text: str) -> dict[str, str]:
    vars_map: dict[str, str] = {}
    for m in re.finditer(r"^\s*\$([a-zA-Z_][a-zA-Z0-9_]*)\s*=\s*'([^']*)'\s*;\s*$", text, re.MULTILINE):
        vars_map[m.group(1)] = m.group(2)
    for m in re.finditer(
        r'^\s*\$([a-zA-Z_][a-zA-Z0-9_]*)\s*=\s*"([^"]*)"\s*;\s*$', text, re.MULTILINE
    ):
        vars_map[m.group(1)] = m.group(2)
    return vars_map


def strip_abspath_guard(text: str) -> str:
    return re.sub(
        r"<\?php\s+if\s*\(\s*!\s*defined\s*\(\s*'ABSPATH'\s*\)\s*\)\s*\{\s*exit;\s*}\s*\?>\s*",
        "",
        text,
        count=1,
    )


def php_to_html_fragment(text: str) -> str:
    text = strip_abspath_guard(text)
    text = re.sub(
        r"\$kalendarz_url\s*=\s*home_url\s*\(\s*'/kalendarz/'\s*\)\s*;",
        "$kalendarz_url = 'kalendarz-placeholder.html';",
        text,
    )
    vmap = extract_vars(text)

    def esc_repl(m: re.Match[str]) -> str:
        return decode_php_single_quoted(m.group(1))

    text = re.sub(
        r"<\?php\s+esc_html_e\(\s*'((?:\\.|[^'\\])*)'\s*,\s*'[^']+'\s*\);\s*\?>",
        esc_repl,
        text,
    )
    text = re.sub(
        r"<\?php\s+esc_attr_e\(\s*'((?:\\.|[^'\\])*)'\s*,\s*'[^']+'\s*\);\s*\?>",
        esc_repl,
        text,
    )

    def echo_esc_url(m: re.Match[str]) -> str:
        name = m.group(1)
        return vmap.get(name, "#")

    text = re.sub(
        r"<\?php\s+echo\s+esc_url\(\s*\$([a-zA-Z_][a-zA-Z0-9_]*)\s*\);\s*\?>",
        echo_esc_url,
        text,
    )

    text = re.sub(r"<\?php\s*[^?]*\?>", "", text)
    return text.strip()


def layout_head(title: str) -> str:
    return f"""<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{title} | Sudecka Wataha (podgląd)</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/theme.css">
</head>
<body class="sudecka-wataha">
"""


def layout_nav(active_href: str) -> str:
    proc_pages = {
        "jak-zostac-czlonkiem.html",
        "patent-strzelecki.html",
        "licencja-sportowa.html",
        "pozwolenie-na-bron.html",
    }
    is_home = active_href == "index.html"
    is_o_nas = active_href == "o-nas.html"
    is_kontakt = active_href == "kontakt.html"
    proc_open = active_href in proc_pages

    def nav_link(active: bool) -> str:
        return "sw-nav-link" + (" sw-nav-link--active" if active else "")

    dropdown = [
        ("jak-zostac-czlonkiem.html", "Jak zostać członkiem?"),
        ("patent-strzelecki.html", "Patent strzelecki"),
        ("licencja-sportowa.html", "Licencja sportowa"),
        ("pozwolenie-na-bron.html", "Pozwolenie na broń"),
    ]
    sublinks_lines = []
    mob_sub_lines = []
    for h, t in dropdown:
        da = " sw-nav__dropdown-link--active" if h == active_href else ""
        ma = " mobile-nav-panel__link--active" if h == active_href else ""
        sublinks_lines.append(
            f'<a role="menuitem" href="{h}" class="sw-nav__dropdown-link{da}">{t}</a>'
        )
        mob_sub_lines.append(
            f'<a href="{h}" class="mobile-nav-panel__link mobile-nav-panel__link--sub{ma}">{t}</a>'
        )
    sublinks = "\n".join(sublinks_lines)
    mob_sub = "\n".join(mob_sub_lines)
    open_attr = " open" if proc_open else ""
    drop_wrap = " sw-nav__dropdown--current" if proc_open else ""
    m_home = " mobile-nav-panel__link--active" if is_home else ""
    m_onas = " mobile-nav-panel__link--active" if is_o_nas else ""
    m_kon = " mobile-nav-panel__link--active" if is_kontakt else ""

    return f"""
<header class="sw-nav fixed top-0 left-0 right-0 z-50">
    <div class="sw-nav__bar">
        <div class="sw-nav__inner max-w-7xl mx-auto flex items-center justify-between gap-4 px-4 lg:px-8 py-3 min-h-[3.5rem]">
            <a href="index.html" class="sw-nav__brand shrink-0 no-underline group">
                <img src="assets/images/logo-sudecka-wataha.png" alt="Strzelecki Klub Sportowy Sudecka Wataha" class="sw-nav__brand-logo" width="768" height="768" decoding="async">
            </a>
            <div class="hidden lg:flex items-center gap-0.5 xl:gap-1" role="navigation" aria-label="Menu główne">
                <a href="index.html" class="{nav_link(is_home)}">Start</a>
                <a href="o-nas.html" class="{nav_link(is_o_nas)}">O nas</a>
                <div class="sw-nav__dropdown{drop_wrap}">
                    <button type="button" class="sw-nav__dropdown-trigger {nav_link(proc_open)}" aria-expanded="false" aria-haspopup="true" aria-controls="sw-desktop-submenu">
                        <span>Formalności</span>
                        <svg class="sw-nav__chevron" width="12" height="12" viewBox="0 0 12 12" fill="none" stroke="currentColor" aria-hidden="true"><path d="M3 4.5L6 7.5L9 4.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </button>
                    <div class="sw-nav__dropdown-panel" id="sw-desktop-submenu" role="menu">
                        {sublinks}
                    </div>
                </div>
                <a href="kontakt.html" class="{nav_link(is_kontakt)}">Kontakt</a>
            </div>
            <button type="button" class="mobile-nav-toggle lg:hidden" aria-expanded="false" aria-controls="sw-mobile-nav">Menu</button>
        </div>
        <div id="sw-mobile-nav" class="mobile-nav-panel lg:hidden border-t border-white/10">
            <div class="max-w-7xl mx-auto px-4 py-2 pb-4">
                <a href="index.html" class="mobile-nav-panel__link{m_home}">Start</a>
                <a href="o-nas.html" class="mobile-nav-panel__link{m_onas}">O nas</a>
                <details class="mobile-nav-details"{open_attr}>
                    <summary class="mobile-nav-details__summary">Formalności i procedury</summary>
                    <div class="mobile-nav-details__links">
                        {mob_sub}
                    </div>
                </details>
                <a href="kontakt.html" class="mobile-nav-panel__link{m_kon}">Kontakt</a>
            </div>
        </div>
    </div>
</header>
"""


def layout_footer() -> str:
    y = __import__("datetime").datetime.now().year
    return f"""
<footer class="site-footer border-t py-20 text-center mt-0">
    <a href="index.html" class="site-footer__logo-link">
        <img src="assets/images/logo-sudecka-wataha.png" alt="Strzelecki Klub Sportowy Sudecka Wataha" class="site-footer__logo" width="768" height="768" decoding="async">
    </a>
    <div class="site-footer__legal">
        <p class="site-footer__krs font-serif">KRS 0000634605</p>
        <p class="site-footer__krs-desc">Zarejestrowani w KRS jako Stowarzyszenie Strzelecki Klub Sportowy Sudecka Wataha — Sąd Rejonowy we Wrocławiu.</p>
    </div>
    <p class="site-footer__note text-xs tracking-widest uppercase mb-4">© {y} · Strzelecki Klub Sportowy Sudecka Wataha · podgląd statyczny</p>
    <div class="flex flex-wrap justify-center gap-4 md:gap-6 px-4 text-sm">
        <a href="o-nas.html">O nas</a>
        <a href="kontakt.html">Kontakt</a>
    </div>
</footer>
<script src="assets/js/theme.js"></script>
</body>
</html>
"""


MAP_SECTION_HTML = """
    <section class="sw-map-section section-padding px-4" aria-label="Lokalizacja na mapie">
        <div class="max-w-5xl mx-auto">
            <header class="sw-map-section__head text-center mb-9 lg:mb-11 reveal">
                <p class="pack-grid-section__overline">Lokalizacja</p>
                <div class="pack-grid-section__rule" aria-hidden="true"><span class="pack-grid-section__rule-line"></span><span class="pack-grid-section__rule-mark">◆</span><span class="pack-grid-section__rule-line"></span></div>
                <h2 class="sw-map-section__title font-serif">Strzelnica Sudecka</h2>
                <p class="sw-map-section__lead max-w-2xl mx-auto">Kolonia 11, 57-500 Bystrzyca Kłodzka, Polska</p>
            </header>
            <div class="sw-map-frame reveal">
                <iframe src="https://www.google.com/maps?q=50.2868605%2C16.6288946&amp;z=17&amp;output=embed&amp;hl=pl" title="Mapa Google — Strzelnica Sudecka" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
            </div>
            <p class="sw-map-section__link-wrap text-center mt-5 mb-0">
                <a class="sw-map-section__link" href="https://maps.app.goo.gl/Ap4T4yaKguwpusWY6" target="_blank" rel="noopener noreferrer">Otwórz w Google Maps<span aria-hidden="true"> ↗</span></a>
            </p>
        </div>
    </section>
"""


KONTAKT_PREVIEW_BODY = """
<article class="sw-article prose-page page-inner">
    <header class="sw-page-head">
        <div class="sw-page-head__text">
            <p class="sw-eyebrow">Kontakt</p>
            <h1 class="page-title font-serif">Kontakt</h1>
            <p class="sw-lead">Napisz — odpowiadamy członkom i kandydatom.</p>
        </div>
        <figure class="sw-media sw-media--landscape sw-page-head__media" aria-label="Miejsce na zdjęcie">
            <div class="sw-media__frame">
                <span class="sw-media__glyph" aria-hidden="true"></span>
                <span class="sw-media__hint">Miejsce na zdjęcie</span>
                <span class="sw-media__sub"> np. siedziba, strzelnica, spotkanie.</span>
            </div>
        </figure>
    </header>
    <section class="sw-section">
        <h2>Napisz do nas</h2>
        <p class="sw-contact-form__notice sw-contact-form__notice--success" style="opacity:.88">Podgląd statyczny — na stronie WordPress formularz wysyła wiadomości e-mail.</p>
        <p class="sw-contact-form__intro">Wypełnij formularz — w wdrożeniu trafi do skrzynki klubu. Możesz też napisać bezpośrednio:
            <a href="mailto:sudeckawataha@gmail.com">sudeckawataha@gmail.com</a>
        </p>
        <form class="sw-contact-form" action="#" method="get" onsubmit="return false;">
            <div class="sw-contact-form__grid">
                <p class="sw-contact-form__field">
                    <label class="sw-contact-form__label" for="pv-name">Imię i nazwisko <span class="sw-contact-form__req">*</span></label>
                    <input class="sw-contact-form__input" type="text" id="pv-name" name="pv_name" autocomplete="name">
                </p>
                <p class="sw-contact-form__field">
                    <label class="sw-contact-form__label" for="pv-email">E-mail <span class="sw-contact-form__req">*</span></label>
                    <input class="sw-contact-form__input" type="email" id="pv-email" name="pv_email" autocomplete="email">
                </p>
            </div>
            <p class="sw-contact-form__field">
                <label class="sw-contact-form__label" for="pv-subject">Temat (opcjonalnie)</label>
                <input class="sw-contact-form__input" type="text" id="pv-subject" name="pv_subject">
            </p>
            <p class="sw-contact-form__field">
                <label class="sw-contact-form__label" for="pv-message">Wiadomość <span class="sw-contact-form__req">*</span></label>
                <textarea class="sw-contact-form__textarea" id="pv-message" name="pv_message" rows="6"></textarea>
            </p>
            <p class="sw-contact-form__actions">
                <button type="button" class="sw-contact-form__submit" title="Aktywne po wdrożeniu WordPressa">Wyślij wiadomość</button>
            </p>
        </form>
    </section>
    <section class="sw-section sw-section--accent">
        <h2>Dane do wpłat</h2>
        <div class="sw-callout">
            <p class="m-0">
                <strong class="text-stone-700">Stowarzyszenie Strzelecki Klub Sportowy „Sudecka Wataha”</strong><br>
                Nr konta w PKO Bank Polski:
                <span class="text-stone-700">39 1020 5112 0000 7002 0440 5098</span>
            </p>
        </div>
        <p>w tytule wpłaty prosimy zamieścić: imię i nazwisko osoby wpłacającej oraz za co jest realizowana np. „…składka za rok 2022…”.</p>
    </section>
""" + MAP_SECTION_HTML + """
</article>
"""


def write_page(slug: str) -> None:
    if slug == "kontakt":
        frag = KONTAKT_PREVIEW_BODY.strip()
    else:
        php = THEME_PARTS / f"content-{slug}.php"
        frag = php_to_html_fragment(php.read_text(encoding="utf-8"))
    title_map = {
        "o-nas": "O nas",
        "jak-zostac-czlonkiem": "Jak zostać członkiem?",
        "patent-strzelecki": "Patent strzelecki",
        "licencja-sportowa": "Licencja sportowa",
        "pozwolenie-na-bron": "Pozwolenie na broń",
        "kontakt": "Kontakt",
    }
    title = title_map.get(slug, slug)
    out = (
        layout_head(title)
        + layout_nav(f"{slug}.html")
        + f'<main class="sw-page-shell pt-28 pb-20 px-4">{frag}</main>'
        + layout_footer()
    )
    (ROOT / f"{slug}.html").write_text(out, encoding="utf-8")


def write_index() -> None:
    idx = ROOT.parent / "sudecka-wataha" / "front-page.php"
    # uproszczona wersja: kopiujemy strukturę z PHP bez runtime
    body = """
<main>
    <section class="hero">
        <img src="assets/images/hero-pack.png" alt="" class="forest-bg" width="1920" height="1080" loading="eager" fetchpriority="high" decoding="async">
        <div class="hero__content text-center px-4">
            <div class="wolf-eye-container mx-auto">
                <div class="wolf-eye wolf-eye--left" aria-hidden="true"><span class="wolf-pupil"></span></div>
                <div class="wolf-eye wolf-eye--right" aria-hidden="true"><span class="wolf-pupil"></span></div>
            </div>
            <p class="hero__kicker reveal active">Strzelecki Klub Sportowy</p>
            <h1 class="hero__title font-serif reveal">SUDECKA WATAHA</h1>
            <p class="hero__quote reveal">„Siłą wilka jest wataha, siłą watahy jest wilk…”<cite>Rudyard Kipling (1865–1936)</cite></p>
            <div class="hero__actions reveal">
                <a href="index.html#poznaj-watahe" class="hero__btn hero__btn--outline">Poznaj watahę</a>
                <a href="jak-zostac-czlonkiem.html" class="hero__btn hero__btn--fill">Dołącz do nas</a>
            </div>
        </div>
        <a href="#poznaj-watahe" class="hero__scroll animate-bounce no-underline" aria-label="Przewiń do sekcji o klubie">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
        </a>
    </section>
    <section id="poznaj-watahe" class="home-about section-padding relative px-4">
        <div class="home-about__glow" aria-hidden="true"></div>
        <div class="max-w-6xl mx-auto relative z-[1]">
            <header class="home-about__head reveal text-center mb-12 lg:mb-16">
                <p class="pack-grid-section__overline">Stowarzyszenie</p>
                <div class="pack-grid-section__rule" aria-hidden="true"><span class="pack-grid-section__rule-line"></span><span class="pack-grid-section__rule-mark">◆</span><span class="pack-grid-section__rule-line"></span></div>
                <h2 class="pack-grid-section__title font-serif uppercase tracking-[0.2em] text-2xl sm:text-3xl md:text-4xl font-bold mb-5">Kim jesteśmy</h2>
                <p class="pack-grid-section__lead max-w-2xl mx-auto font-light leading-relaxed text-sm sm:text-base">Strzelectwo sportowe, ludzie z pasją i pewność siebie — od treningu po zawody, w atmosferze otwartej watahy.</p>
            </header>
            <div class="home-about__grid reveal">
                <div class="home-about__main">
                    <p class="home-about__p">Strzelectwo wzmacnia koncentrację, kondycję i poczucie bezpieczeństwa; regularne treningi i starty uczą dyscypliny, z której korzystasz także poza strzelnicą.</p>
                    <p class="home-about__p">Organizujemy spotkania, szkolenia i zawody — to także miejsce, by poznać ludzi z podobnym zainteresowaniem. Wataha jest otwarta: wiek i płć nie grają roli, liczą się niekaralność i dobre chęci.</p>
                    <ul class="home-about__highlights" role="list">
                        <li>Trening strzelecki i procedury bezpieczeństwa pod okiem doświadczonych osób z klubu.</li>
                        <li>Starty sportowe i formalności PZSS — pomagamy przejść ścieżkę od klubu po licencję.</li>
                        <li>Społeczność, która łączy różne środowiska — od pierwszych kroków po konkretne konkurencje.</li>
                    </ul>
                </div>
                <aside class="home-about__aside" aria-label="Skrót o klubie">
                    <div class="home-about__card">
                        <img src="assets/images/logo-sudecka-wataha.png" alt="" class="home-about__mark" width="768" height="768" decoding="async">
                        <p class="home-about__card-kicker">Od 2016 roku</p>
                        <p class="home-about__card-text">Stowarzyszenie Strzelecki Klub Sportowy „Sudecka Wataha” — zespół ludzi z doświadczeniem strzeleckim, zapisany w KRS pod numerem 0000634605.</p>
                        <div class="home-about__card-actions">
                            <a href="o-nas.html" class="hero__btn hero__btn--outline">Czytaj całość „O nas”</a>
                            <a href="jak-zostac-czlonkiem.html" class="hero__btn hero__btn--fill">Dołącz do nas — kroki i dokumenty</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <section id="wezel" class="pack-grid-section section-padding relative px-4">
        <div class="pack-grid-section__glow" aria-hidden="true"></div>
        <div class="max-w-6xl mx-auto relative z-[1]">
            <header class="pack-grid-section__head reveal text-center mb-14 lg:mb-20">
                <p class="pack-grid-section__overline">Teren stada</p>
                <div class="pack-grid-section__rule" aria-hidden="true"><span class="pack-grid-section__rule-line"></span><span class="pack-grid-section__rule-mark">◆</span><span class="pack-grid-section__rule-line"></span></div>
                <h2 class="pack-grid-section__title font-serif uppercase tracking-[0.2em] text-2xl sm:text-3xl md:text-4xl font-bold mb-6">Witaj w stadzie</h2>
                <p class="pack-grid-section__lead max-w-2xl mx-auto font-light leading-relaxed text-sm sm:text-base">Stowarzyszenie Strzelecki Klub Sportowy — miejsce dla pasji, bezpieczeństwa i sportowego charakteru.</p>
            </header>
            <div class="pack-grid grid sm:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-6 reveal">
                <a href="o-nas.html" class="pack-card group"><span class="pack-card__gleam" aria-hidden="true"></span><span class="pack-card__idx" aria-hidden="true">01</span><div class="pack-card__inner"><h3 class="pack-card__title font-serif">O nas</h3><p class="pack-card__desc">Kim jesteśmy, skąd się wzięliśmy i czym żyje nasza wataha.</p><span class="pack-card__cta"><span>Otwórz</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></span></div></a>
                <a href="jak-zostac-czlonkiem.html" class="pack-card group"><span class="pack-card__gleam" aria-hidden="true"></span><span class="pack-card__idx" aria-hidden="true">02</span><div class="pack-card__inner"><h3 class="pack-card__title font-serif">Jak zostać członkiem?</h3><p class="pack-card__desc">Kroki, dokumenty, składki — od deklaracji po decyzję zarządu.</p><span class="pack-card__cta"><span>Otwórz</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></span></div></a>
                <a href="patent-strzelecki.html" class="pack-card group sm:col-span-2 lg:col-span-1"><span class="pack-card__gleam" aria-hidden="true"></span><span class="pack-card__idx" aria-hidden="true">03</span><div class="pack-card__inner"><h3 class="pack-card__title font-serif">Patent strzelecki</h3><p class="pack-card__desc">Procedura PZSS, staż, egzamin teoretyczny i praktyczny.</p><span class="pack-card__cta"><span>Otwórz</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></span></div></a>
                <a href="licencja-sportowa.html" class="pack-card group"><span class="pack-card__gleam" aria-hidden="true"></span><span class="pack-card__idx" aria-hidden="true">04</span><div class="pack-card__inner"><h3 class="pack-card__title font-serif">Licencja sportowa</h3><p class="pack-card__desc">Pierwsza licencja i przedłużenie — kalendarz startów i procedury.</p><span class="pack-card__cta"><span>Otwórz</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></span></div></a>
                <a href="pozwolenie-na-bron.html" class="pack-card group"><span class="pack-card__gleam" aria-hidden="true"></span><span class="pack-card__idx" aria-hidden="true">05</span><div class="pack-card__inner"><h3 class="pack-card__title font-serif">Pozwolenie na broń</h3><p class="pack-card__desc">Ścieżka sportowa i kolekcjonerska — kroki, dokumenty, porównanie.</p><span class="pack-card__cta"><span>Otwórz</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></span></div></a>
                <a href="kontakt.html" class="pack-card group"><span class="pack-card__gleam" aria-hidden="true"></span><span class="pack-card__idx" aria-hidden="true">06</span><div class="pack-card__inner"><h3 class="pack-card__title font-serif">Kontakt</h3><p class="pack-card__desc">Napisz do nas — jesteśmy na miejscu dla członków i kandydatów.</p><span class="pack-card__cta"><span>Otwórz</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></span></div></a>
            </div>
        </div>
    </section>
    <section class="krs-band home-contact-cta section-padding">
        <div class="max-w-3xl mx-auto px-4 reveal text-center">
            <p class="home-contact-cta__eyebrow">Masz pytania lub chcesz dołączyć?</p>
            <h2 class="krs-band__title text-2xl sm:text-3xl mb-5 font-serif">Skontaktuj się z nami</h2>
            <p class="krs-band__text font-light text-sm sm:text-base max-w-2xl mx-auto mb-8">Napisz — pomożemy członkom, kandydatom i osobom zainteresowanym klubem. Na stronie Kontakt znajdziesz formularz oraz dane do przelewów.</p>
            <a href="kontakt.html" class="home-contact-cta__btn">Przejdź do kontaktu</a>
        </div>
    </section>
""" + MAP_SECTION_HTML + """
</main>
"""
    out = (
        layout_head("Start")
        + layout_nav("index.html")
        + body
        + layout_footer()
    )
    (ROOT / "index.html").write_text(out, encoding="utf-8")


def write_kalendarz_placeholder() -> None:
    msg = (
        layout_head("Kalendarz")
        + layout_nav("")
        + '<main class="sw-page-shell pt-28 pb-20 px-4"><article class="sw-article prose-page page-inner"><h1 class="page-title font-serif sw-page-title--center">Kalendarz</h1><p class="text-stone-600">W podglądzie statycznym ta strona nie jest zbudowana — w WordPressie użyj adresu /kalendarz/.</p></article></main>'
        + layout_footer()
    )
    (ROOT / "kalendarz-placeholder.html").write_text(msg, encoding="utf-8")


def sync_assets() -> None:
    for sub in ("css", "js"):
        src = THEME_DIR / "assets" / sub
        dst = ROOT / "assets" / sub
        dst.mkdir(parents=True, exist_ok=True)
        for f in src.iterdir():
            if f.is_file():
                shutil.copy2(f, dst / f.name)


def main() -> None:
    sync_assets()
    write_index()
    for slug in SLUGS:
        write_page(slug)
    write_kalendarz_placeholder()
    print("Wygenerowano podgląd HTML w:", ROOT)
    print("  - index.html, o-nas.html, … (nagłówek jak w motywie PHP)")
    print("  - Uruchom: python3 -m http.server 8765  lub  ./serve.sh")


if __name__ == "__main__":
    main()
