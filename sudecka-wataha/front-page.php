<?php
if (! defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main>
    <section class="hero">
        <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hero-pack.png'); ?>"
            alt=""
            class="forest-bg"
            width="1920"
            height="1080"
            loading="eager"
            fetchpriority="high"
            decoding="async"
        >
        <div class="hero__content text-center px-4">
            <div class="wolf-eye-container mx-auto">
                <div class="wolf-eye wolf-eye--left" aria-hidden="true">
                    <span class="wolf-pupil"></span>
                </div>
                <div class="wolf-eye wolf-eye--right" aria-hidden="true">
                    <span class="wolf-pupil"></span>
                </div>
            </div>
            <p class="hero__kicker reveal active"><?php esc_html_e('Strzelecki Klub Sportowy', 'sudecka-wataha'); ?></p>
            <h1 class="hero__title font-serif reveal"><?php esc_html_e('SUDECKA WATAHA', 'sudecka-wataha'); ?></h1>
            <p class="hero__quote reveal">
                <?php esc_html_e('„Siłą wilka jest wataha, siłą watahy jest wilk…”', 'sudecka-wataha'); ?>
                <cite>Rudyard Kipling (1865–1936)</cite>
            </p>
            <div class="hero__actions reveal">
                <a href="<?php echo esc_url(home_url('/')); ?>#poznaj-watahe" class="hero__btn hero__btn--outline"><?php esc_html_e('Poznaj watahę', 'sudecka-wataha'); ?></a>
                <a href="<?php echo esc_url(home_url('/jak-zostac-czlonkiem/')); ?>" class="hero__btn hero__btn--fill"><?php esc_html_e('Dołącz do nas', 'sudecka-wataha'); ?></a>
            </div>
        </div>
        <a href="#poznaj-watahe" class="hero__scroll animate-bounce no-underline" aria-label="<?php esc_attr_e('Przewiń do sekcji o klubie', 'sudecka-wataha'); ?>">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
        </a>
    </section>

    <?php get_template_part('template-parts/home', 'about'); ?>

    <section id="wezel" class="pack-grid-section section-padding relative px-4">
        <div class="pack-grid-section__glow" aria-hidden="true"></div>
        <div class="max-w-6xl mx-auto relative z-[1]">
            <header class="pack-grid-section__head reveal text-center mb-14 lg:mb-20">
                <p class="pack-grid-section__overline"><?php esc_html_e('Teren stada', 'sudecka-wataha'); ?></p>
                <div class="pack-grid-section__rule" aria-hidden="true">
                    <span class="pack-grid-section__rule-line"></span>
                    <span class="pack-grid-section__rule-mark">◆</span>
                    <span class="pack-grid-section__rule-line"></span>
                </div>
                <h2 class="pack-grid-section__title font-serif uppercase tracking-[0.2em] text-2xl sm:text-3xl md:text-4xl font-bold mb-6"><?php esc_html_e('Witaj w stadzie', 'sudecka-wataha'); ?></h2>
                <p class="pack-grid-section__lead max-w-2xl mx-auto font-light leading-relaxed text-sm sm:text-base">
                    <?php esc_html_e('Stowarzyszenie Strzelecki Klub Sportowy — miejsce dla pasji, bezpieczeństwa i sportowego charakteru.', 'sudecka-wataha'); ?>
                </p>
            </header>
            <div class="pack-grid grid sm:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-6 reveal">
                <a href="<?php echo esc_url(home_url('/o-nas/')); ?>" class="pack-card group">
                    <span class="pack-card__gleam" aria-hidden="true"></span>
                    <span class="pack-card__idx" aria-hidden="true">01</span>
                    <div class="pack-card__inner">
                        <h3 class="pack-card__title font-serif"><?php esc_html_e('O nas', 'sudecka-wataha'); ?></h3>
                        <p class="pack-card__desc"><?php esc_html_e('Kim jesteśmy, skąd się wzięliśmy i czym żyje nasza wataha.', 'sudecka-wataha'); ?></p>
                        <span class="pack-card__cta"><span><?php esc_html_e('Otwórz', 'sudecka-wataha'); ?></span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></span>
                    </div>
                </a>
                <a href="<?php echo esc_url(home_url('/jak-zostac-czlonkiem/')); ?>" class="pack-card group">
                    <span class="pack-card__gleam" aria-hidden="true"></span>
                    <span class="pack-card__idx" aria-hidden="true">02</span>
                    <div class="pack-card__inner">
                        <h3 class="pack-card__title font-serif"><?php esc_html_e('Jak zostać członkiem?', 'sudecka-wataha'); ?></h3>
                        <p class="pack-card__desc"><?php esc_html_e('Kroki, dokumenty, składki — od deklaracji po decyzję zarządu.', 'sudecka-wataha'); ?></p>
                        <span class="pack-card__cta"><span><?php esc_html_e('Otwórz', 'sudecka-wataha'); ?></span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></span>
                    </div>
                </a>
                <a href="<?php echo esc_url(home_url('/patent-strzelecki/')); ?>" class="pack-card group sm:col-span-2 lg:col-span-1">
                    <span class="pack-card__gleam" aria-hidden="true"></span>
                    <span class="pack-card__idx" aria-hidden="true">03</span>
                    <div class="pack-card__inner">
                        <h3 class="pack-card__title font-serif"><?php esc_html_e('Patent strzelecki', 'sudecka-wataha'); ?></h3>
                        <p class="pack-card__desc"><?php esc_html_e('Procedura PZSS, staż, egzamin teoretyczny i praktyczny.', 'sudecka-wataha'); ?></p>
                        <span class="pack-card__cta"><span><?php esc_html_e('Otwórz', 'sudecka-wataha'); ?></span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></span>
                    </div>
                </a>
                <a href="<?php echo esc_url(home_url('/licencja-sportowa/')); ?>" class="pack-card group">
                    <span class="pack-card__gleam" aria-hidden="true"></span>
                    <span class="pack-card__idx" aria-hidden="true">04</span>
                    <div class="pack-card__inner">
                        <h3 class="pack-card__title font-serif"><?php esc_html_e('Licencja sportowa', 'sudecka-wataha'); ?></h3>
                        <p class="pack-card__desc"><?php esc_html_e('Pierwsza licencja i przedłużenie — kalendarz startów i procedury.', 'sudecka-wataha'); ?></p>
                        <span class="pack-card__cta"><span><?php esc_html_e('Otwórz', 'sudecka-wataha'); ?></span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></span>
                    </div>
                </a>
                <a href="<?php echo esc_url(home_url('/pozwolenie-na-bron/')); ?>" class="pack-card group">
                    <span class="pack-card__gleam" aria-hidden="true"></span>
                    <span class="pack-card__idx" aria-hidden="true">05</span>
                    <div class="pack-card__inner">
                        <h3 class="pack-card__title font-serif"><?php esc_html_e('Pozwolenie na broń', 'sudecka-wataha'); ?></h3>
                        <p class="pack-card__desc"><?php esc_html_e('Ścieżka sportowa i kolekcjonerska — kroki, dokumenty, porównanie.', 'sudecka-wataha'); ?></p>
                        <span class="pack-card__cta"><span><?php esc_html_e('Otwórz', 'sudecka-wataha'); ?></span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></span>
                    </div>
                </a>
                <a href="<?php echo esc_url(home_url('/kontakt/')); ?>" class="pack-card group">
                    <span class="pack-card__gleam" aria-hidden="true"></span>
                    <span class="pack-card__idx" aria-hidden="true">06</span>
                    <div class="pack-card__inner">
                        <h3 class="pack-card__title font-serif"><?php esc_html_e('Kontakt', 'sudecka-wataha'); ?></h3>
                        <p class="pack-card__desc"><?php esc_html_e('Napisz do nas — jesteśmy na miejscu dla członków i kandydatów.', 'sudecka-wataha'); ?></p>
                        <span class="pack-card__cta"><span><?php esc_html_e('Otwórz', 'sudecka-wataha'); ?></span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="krs-band home-contact-cta section-padding">
        <div class="max-w-3xl mx-auto px-4 reveal text-center">
            <p class="home-contact-cta__eyebrow"><?php esc_html_e('Masz pytania lub chcesz dołączyć?', 'sudecka-wataha'); ?></p>
            <h2 class="krs-band__title text-2xl sm:text-3xl mb-5 font-serif"><?php esc_html_e('Skontaktuj się z nami', 'sudecka-wataha'); ?></h2>
            <p class="krs-band__text font-light text-sm sm:text-base max-w-2xl mx-auto mb-8">
                <?php esc_html_e('Napisz — pomożemy członkom, kandydatom i osobom zainteresowanym klubem. Na stronie Kontakt znajdziesz formularz oraz dane do przelewów.', 'sudecka-wataha'); ?>
            </p>
            <a href="<?php echo esc_url(home_url('/kontakt/')); ?>" class="home-contact-cta__btn"><?php esc_html_e('Przejdź do kontaktu', 'sudecka-wataha'); ?></a>
        </div>
    </section>

    <?php get_template_part('template-parts/location', 'map'); ?>
</main>
<?php
get_footer();
