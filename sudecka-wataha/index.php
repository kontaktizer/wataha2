<?php
if (! defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main class="sw-page-shell pt-28 pb-20 px-4 min-h-[60vh]">
    <div class="sw-article prose-page page-inner">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                the_title('<h1 class="page-title font-serif text-left mb-8">', '</h1>');
                the_content();
            }
        } else {
            echo '<p class="text-stone-500">' . esc_html__('Brak treści do wyświetlenia.', 'sudecka-wataha') . '</p>';
        }
        ?>
    </div>
</main>
<?php
get_footer();
