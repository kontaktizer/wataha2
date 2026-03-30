<?php
if (! defined('ABSPATH')) {
    exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('sudecka-wataha'); ?>>
<?php wp_body_open(); ?>

<header class="sw-nav fixed top-0 left-0 right-0 z-50">
    <div class="sw-nav__bar">
        <?php sudecka_wataha_render_primary_nav(); ?>
    </div>
</header>
