<?php
if (! defined('ABSPATH')) {
    exit;
}

$embed = sudecka_wataha_maps_embed_url();
$place = sudecka_wataha_maps_place_url();
?>
<section class="sw-map-section section-padding px-4" aria-label="<?php esc_attr_e('Lokalizacja na mapie', 'sudecka-wataha'); ?>">
    <div class="max-w-5xl mx-auto">
        <header class="sw-map-section__head text-center mb-9 lg:mb-11 reveal">
            <p class="pack-grid-section__overline"><?php esc_html_e('Lokalizacja', 'sudecka-wataha'); ?></p>
            <div class="pack-grid-section__rule" aria-hidden="true">
                <span class="pack-grid-section__rule-line"></span>
                <span class="pack-grid-section__rule-mark">◆</span>
                <span class="pack-grid-section__rule-line"></span>
            </div>
            <h2 class="sw-map-section__title font-serif">
                <?php esc_html_e('Strzelnica Sudecka', 'sudecka-wataha'); ?>
            </h2>
            <p class="sw-map-section__lead max-w-2xl mx-auto">
                <?php esc_html_e('Kolonia 11, 57-500 Bystrzyca Kłodzka, Polska', 'sudecka-wataha'); ?>
            </p>
        </header>
        <div class="sw-map-frame reveal">
            <iframe
                src="<?php echo esc_url($embed); ?>"
                title="<?php esc_attr_e('Mapa Google — Strzelnica Sudecka', 'sudecka-wataha'); ?>"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                allowfullscreen
            ></iframe>
        </div>
        <p class="sw-map-section__link-wrap text-center mt-5 mb-0">
            <a class="sw-map-section__link" href="<?php echo esc_url($place); ?>" target="_blank" rel="noopener noreferrer">
                <?php esc_html_e('Otwórz w Google Maps', 'sudecka-wataha'); ?>
                <span aria-hidden="true"> ↗</span>
            </a>
        </p>
    </div>
</section>
