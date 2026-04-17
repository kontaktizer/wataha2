<?php
if (! defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main class="sw-page-shell pt-28 pb-20 px-4">
    <div class="sw-article prose-page page-inner">
        <?php
        while (have_posts()) {
            the_post();
            the_title('<h1 class="page-title font-serif sw-page-title--center">', '</h1>');
            the_content();
        }
        ?>
    </div>
</main>
<?php
get_footer();
