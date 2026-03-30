<?php
if (! defined('ABSPATH')) {
    exit;
}
?>
<footer class="site-footer border-t py-20 text-center mt-0">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="site-footer__logo-link">
        <img
            src="<?php echo esc_url(sudecka_wataha_logo_url()); ?>"
            alt="<?php esc_attr_e('Strzelecki Klub Sportowy Sudecka Wataha', 'sudecka-wataha'); ?>"
            class="site-footer__logo"
            width="768"
            height="768"
            decoding="async"
        >
    </a>
    <div class="site-footer__legal">
        <p class="site-footer__krs font-serif"><?php esc_html_e('KRS 0000634605', 'sudecka-wataha'); ?></p>
        <p class="site-footer__krs-desc">
            <?php esc_html_e('Zarejestrowani w KRS jako Stowarzyszenie Strzelecki Klub Sportowy Sudecka Wataha — Sąd Rejonowy we Wrocławiu.', 'sudecka-wataha'); ?>
        </p>
    </div>
    <p class="site-footer__note text-xs tracking-widest uppercase mb-4">
        &copy; <?php echo esc_html(gmdate('Y')); ?> · <?php esc_html_e('Strzelecki Klub Sportowy Sudecka Wataha', 'sudecka-wataha'); ?>
    </p>
    <div class="flex flex-wrap justify-center gap-4 md:gap-6 px-4 text-sm">
        <a href="<?php echo esc_url(home_url('/o-nas/')); ?>"><?php esc_html_e('O nas', 'sudecka-wataha'); ?></a>
        <a href="<?php echo esc_url(home_url('/kontakt/')); ?>"><?php esc_html_e('Kontakt', 'sudecka-wataha'); ?></a>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
