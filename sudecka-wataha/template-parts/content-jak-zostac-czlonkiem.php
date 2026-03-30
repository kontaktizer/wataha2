<?php
if (! defined('ABSPATH')) {
    exit;
}

$statut_url    = 'https://sudeckawataha.pl/wp-content/uploads/2024/03/STATUT.pdf';
$deklaracja_url = 'https://sudeckawataha.pl/wp-content/uploads/2024/03/DEKLARACJA-CZLONKOWSKA.pdf';
$oswiadczenie_url = 'https://sudeckawataha.pl/wp-content/uploads/2024/03/OSWIADCZENIE-NIEKARALNOSC.pdf';
$strzelnica_url = 'https://strzelnicasudecka.pl/';
?>
<article class="sw-article prose-page page-inner">
    <header class="sw-page-head">
        <div class="sw-page-head__text">
            <p class="sw-eyebrow"><?php esc_html_e('Członkostwo', 'sudecka-wataha'); ?></p>
            <h1 class="page-title font-serif"><?php esc_html_e('Jak zostać członkiem?', 'sudecka-wataha'); ?></h1>
            <p class="sw-lead"><?php esc_html_e('Kroki, dokumenty i składki — od deklaracji po decyzję zarządu.', 'sudecka-wataha'); ?></p>
        </div>
        <figure class="sw-media sw-media--portrait sw-page-head__media" aria-label="<?php esc_attr_e('Miejsce na zdjęcie', 'sudecka-wataha'); ?>">
            <div class="sw-media__frame">
                <span class="sw-media__glyph" aria-hidden="true"></span>
                <span class="sw-media__hint"><?php esc_html_e('Zdjęcie', 'sudecka-wataha'); ?></span>
                <span class="sw-media__sub"><?php esc_html_e(' np. szkolenie, strzelnica, ludzie z klubu.', 'sudecka-wataha'); ?></span>
            </div>
        </figure>
    </header>

    <section class="sw-section">
        <h2><?php esc_html_e('Dla kogo?', 'sudecka-wataha'); ?></h2>
        <p><?php esc_html_e('Sudecka Wataha powstała dla wszystkich, dla których strzelanie jest pasją. Nie martw się jeżeli nie posiadasz doświadczenia w posługiwaniu się bronią. Podczas spotkań organizowanych przez nasze stowarzyszenie nabędziesz odpowiednią wiedzę i umiejętności niezbędne do zdania egzaminu na patent strzelecki.', 'sudecka-wataha'); ?></p>
    </section>

    <section class="sw-section sw-section--accent">
        <h2><?php esc_html_e('Dlaczego?', 'sudecka-wataha'); ?></h2>
        <p><?php esc_html_e('Są tysiące powodów by do nas dołączyć! Znajdź swój i podziel się nim z nami. Przynależność do stowarzyszenia daje Ci wiele możliwości a jedną z nich jest zdobycie uprawnień i umiejętności niezbędnych posiadanie broni. Prawo do posiadania broni nabywa się po spełnieniu kryteriów określonych przez organ administracyjny. Jednym z nich jest przynależność do stowarzyszenia o charakterze kolekcjonerskim lub sportowym. Członkostwo w naszym klubie pozwala spełnić ten warunek.', 'sudecka-wataha'); ?></p>
    </section>

    <figure class="sw-media sw-media--landscape" aria-label="<?php esc_attr_e('Miejsce na zdjęcie', 'sudecka-wataha'); ?>">
        <div class="sw-media__frame">
            <span class="sw-media__glyph" aria-hidden="true"></span>
            <span class="sw-media__hint"><?php esc_html_e('Miejsce na zdjęcie', 'sudecka-wataha'); ?></span>
            <span class="sw-media__sub"><?php esc_html_e(' np. panorama strzelnicy lub wydarzenie klubowe.', 'sudecka-wataha'); ?></span>
        </div>
    </figure>

    <section class="sw-section">
        <h2><?php esc_html_e('Warunki', 'sudecka-wataha'); ?></h2>
        <ol>
            <li><?php esc_html_e('Posiadanie polskiego obywatelstwa oraz pełnej zdolności do czynności prawnych i praw publicznych.', 'sudecka-wataha'); ?></li>
            <li><?php esc_html_e('Niekaralność za umyślne przestępstwo lub umyślne przestępstwo skarbowe.', 'sudecka-wataha'); ?></li>
            <li>
                <?php esc_html_e('Stosowanie się do postanowień Statutu Stowarzyszenia', 'sudecka-wataha'); ?>
                (<a href="<?php echo esc_url($statut_url); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('kliknij tutaj aby pobrać', 'sudecka-wataha'); ?></a>).
            </li>
        </ol>
    </section>

    <section class="sw-section">
        <h2><?php esc_html_e('Jak?', 'sudecka-wataha'); ?></h2>
        <ol>
            <li>
                <?php esc_html_e('Wypełnij deklarację członkowską', 'sudecka-wataha'); ?>
                (<a href="<?php echo esc_url($deklaracja_url); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('kliknij tutaj aby pobrać', 'sudecka-wataha'); ?></a>).
                <?php esc_html_e('W prawym górnym rogu napisz odręcznie literę „S” jeżeli interesuje Cię pozwolenie na broń do celów sportowych, lub literę „K” jeżeli interesuje Cię pozwolenie na broń do celów kolekcjonerskich.', 'sudecka-wataha'); ?>
            </li>
            <li>
                <?php esc_html_e('Wypełnij oświadczenie o niekaralności', 'sudecka-wataha'); ?>
                (<a href="<?php echo esc_url($oswiadczenie_url); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('kliknij tutaj aby pobrać', 'sudecka-wataha'); ?></a>).
            </li>
            <li>
                <?php esc_html_e('Wpłać jednorazowe wpisowe 250 zł (zwolnieni z opłaty są zawodnicy z innych klubów zrzeszonych w PZSS, żołnierze MON oraz funkcjonariusze MSWiA) oraz składkę roczną w wysokości 400 zł plus: 300 zł za każdego kolejnego członka rodziny (mąż, żona, dziecko powyżej 18 roku życia), 50 zł za dzieci poniżej 18 roku życia. Osoby przystępujące do stowarzyszenia po 1 lipca 2025 roku płacą połowę składki członkowskiej za dany rok.', 'sudecka-wataha'); ?>
            </li>
            <li>
                <?php esc_html_e('Dostarcz wydrukowane i podpisane dokumenty (deklaracja oraz oświadczenie) na najbliższe spotkanie Stowarzyszenia lub', 'sudecka-wataha'); ?>
                <a href="<?php echo esc_url($strzelnica_url); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Strzelnicę Sudecką', 'sudecka-wataha'); ?></a>
                <?php esc_html_e('(ul. Kolonia 11, Bystrzyca Kłodzka) — po uprzednim kontakcie telefonicznym.', 'sudecka-wataha'); ?>
            </li>
        </ol>
        <p><?php esc_html_e('I to tylko tyle z Twojej strony…', 'sudecka-wataha'); ?></p>
    </section>

    <section class="sw-section sw-section--accent">
        <h2><?php esc_html_e('Podsumujmy więc:', 'sudecka-wataha'); ?></h2>
        <ol>
            <li><?php esc_html_e('Żeby zostać członkiem Stowarzyszenia Strzelecki Klub Sportowy „Sudecka Wataha” musisz wypełnić deklarację członkowską oraz zaświadczenie o niekaralności.', 'sudecka-wataha'); ?></li>
            <li><?php esc_html_e('Opłata wpisowa jest jednorazowa i wynosi 250 zł, natomiast składka członkowska wynosi 400 zł i opłacana jest raz na rok.', 'sudecka-wataha'); ?></li>
            <li><?php esc_html_e('Po dokonaniu opłat Zarząd podejmie decyzję o przyjęciu Cię do „Sudeckiej Watahy”.', 'sudecka-wataha'); ?></li>
            <li><?php esc_html_e('Na Twoją prośbę wystawimy Ci dokumenty niezbędne do złożenia podania o pozwolenie na broń: Statut poświadczony za zgodność oraz Zaświadczenie o przynależności do Stowarzyszenia.', 'sudecka-wataha'); ?></li>
        </ol>
    </section>

    <section class="sw-section">
        <h2><?php esc_html_e('Dane do wpłat', 'sudecka-wataha'); ?></h2>
        <div class="sw-callout">
            <p class="m-0">
                <strong class="text-stone-700"><?php esc_html_e('Stowarzyszenie Strzelecki Klub Sportowy „Sudecka Wataha”', 'sudecka-wataha'); ?></strong><br>
                <?php esc_html_e('Nr konta w PKO Bank Polski', 'sudecka-wataha'); ?>
                <span class="text-stone-700">39 1020 5112 0000 7002 0440 5098</span>
            </p>
        </div>
        <p><?php esc_html_e('w tytule wpłaty prosimy zamieścić: imię i nazwisko osoby wpłacającej oraz za co jest realizowana np. „…składka za rok 2022…”.', 'sudecka-wataha'); ?></p>
    </section>
</article>
