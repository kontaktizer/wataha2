<?php
if (! defined('ABSPATH')) {
    exit;
}
?>
<section id="poznaj-watahe" class="home-about section-padding relative px-4">
    <div class="home-about__glow" aria-hidden="true"></div>
    <div class="max-w-6xl mx-auto relative z-[1]">
        <header class="home-about__head reveal text-center mb-12 lg:mb-16">
            <p class="pack-grid-section__overline"><?php esc_html_e('Stowarzyszenie', 'sudecka-wataha'); ?></p>
            <div class="pack-grid-section__rule" aria-hidden="true">
                <span class="pack-grid-section__rule-line"></span>
                <span class="pack-grid-section__rule-mark">◆</span>
                <span class="pack-grid-section__rule-line"></span>
            </div>
            <h2 class="pack-grid-section__title font-serif uppercase tracking-[0.2em] text-2xl sm:text-3xl md:text-4xl font-bold mb-5">
                <?php esc_html_e('Kim jesteśmy', 'sudecka-wataha'); ?>
            </h2>
            <p class="pack-grid-section__lead max-w-2xl mx-auto font-light leading-relaxed text-sm sm:text-base">
                <?php esc_html_e('Strzelectwo sportowe, ludzie z pasją i pewność siebie — od treningu po zawody, w atmosferze otwartej watahy.', 'sudecka-wataha'); ?>
            </p>
        </header>

        <div class="home-about__grid reveal">
            <div class="home-about__main">
                <p class="home-about__p">
                    <?php esc_html_e('Strzelectwo wzmacnia koncentrację, kondycję i poczucie bezpieczeństwa; regularne treningi i starty uczą dyscypliny, z której korzystasz także poza strzelnicą.', 'sudecka-wataha'); ?>
                </p>
                <p class="home-about__p">
                    <?php esc_html_e('Organizujemy spotkania, szkolenia i zawody — to także miejsce, by poznać ludzi z podobnym zainteresowaniem. Wataha jest otwarta: wiek i płć nie grają roli, liczą się niekaralność i dobre chęci.', 'sudecka-wataha'); ?>
                </p>
                <ul class="home-about__highlights" role="list">
                    <li><?php esc_html_e('Trening strzelecki i procedury bezpieczeństwa pod okiem doświadczonych osób z klubu.', 'sudecka-wataha'); ?></li>
                    <li><?php esc_html_e('Starty sportowe i formalności PZSS — pomagamy przejść ścieżkę od klubu po licencję.', 'sudecka-wataha'); ?></li>
                    <li><?php esc_html_e('Społeczność, która łączy różne środowiska — od pierwszych kroków po konkretne konkurencje.', 'sudecka-wataha'); ?></li>
                </ul>
            </div>

            <aside class="home-about__aside" aria-label="<?php esc_attr_e('Skrót o klubie', 'sudecka-wataha'); ?>">
                <div class="home-about__card">
                    <img
                        src="<?php echo esc_url(sudecka_wataha_logo_url()); ?>"
                        alt=""
                        class="home-about__mark"
                        width="768"
                        height="768"
                        decoding="async"
                    >
                    <p class="home-about__card-kicker"><?php esc_html_e('Od 2016 roku', 'sudecka-wataha'); ?></p>
                    <p class="home-about__card-text">
                        <?php esc_html_e('Stowarzyszenie Strzelecki Klub Sportowy „Sudecka Wataha” — zespół ludzi z doświadczeniem strzeleckim, zapisany w KRS pod numerem 0000634605.', 'sudecka-wataha'); ?>
                    </p>
                    <div class="home-about__card-actions">
                        <a href="<?php echo esc_url(home_url('/o-nas/')); ?>" class="hero__btn hero__btn--outline">
                            <?php esc_html_e('Czytaj całość „O nas”', 'sudecka-wataha'); ?>
                        </a>
                        <a href="<?php echo esc_url(home_url('/jak-zostac-czlonkiem/')); ?>" class="hero__btn hero__btn--fill">
                            <?php esc_html_e('Dołącz do nas — kroki i dokumenty', 'sudecka-wataha'); ?>
                        </a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
