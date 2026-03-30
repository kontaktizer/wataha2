<?php
if (! defined('ABSPATH')) {
    exit;
}

$sw_contact_email = sudecka_wataha_contact_recipient_email();
$sw_contact_raw = isset($_GET['contact']) ? sanitize_key(wp_unslash($_GET['contact'])) : '';
$sw_contact_allowed = ['thanks', 'failed', 'invalid', 'error', 'busy'];
$sw_contact_feedback = in_array($sw_contact_raw, $sw_contact_allowed, true) ? $sw_contact_raw : '';
?>
<article class="sw-article prose-page page-inner">
    <header class="sw-page-head">
        <div class="sw-page-head__text">
            <p class="sw-eyebrow"><?php esc_html_e('Kontakt', 'sudecka-wataha'); ?></p>
            <h1 class="page-title font-serif"><?php esc_html_e('Kontakt', 'sudecka-wataha'); ?></h1>
            <p class="sw-lead"><?php esc_html_e('Napisz — odpowiadamy członkom i kandydatom.', 'sudecka-wataha'); ?></p>
        </div>
        <figure class="sw-media sw-media--landscape sw-page-head__media" aria-label="<?php esc_attr_e('Miejsce na zdjęcie', 'sudecka-wataha'); ?>">
            <div class="sw-media__frame">
                <span class="sw-media__glyph" aria-hidden="true"></span>
                <span class="sw-media__hint"><?php esc_html_e('Miejsce na zdjęcie', 'sudecka-wataha'); ?></span>
                <span class="sw-media__sub"><?php esc_html_e(' np. siedziba, strzelnica, spotkanie.', 'sudecka-wataha'); ?></span>
            </div>
        </figure>
    </header>

    <section class="sw-section">
        <h2><?php esc_html_e('Napisz do nas', 'sudecka-wataha'); ?></h2>

        <?php if ($sw_contact_feedback === 'thanks') : ?>
            <p class="sw-contact-form__notice sw-contact-form__notice--success" role="status">
                <?php esc_html_e('Dziękujemy — wiadomość została wysłana. Odezwiemy się najszybciej, jak to możliwe.', 'sudecka-wataha'); ?>
            </p>
        <?php elseif ($sw_contact_feedback === 'failed') : ?>
            <p class="sw-contact-form__notice sw-contact-form__notice--error" role="alert">
                <?php esc_html_e('Nie udało się wysłać wiadomości. Spróbuj ponownie za chwilę lub napisz bezpośrednio na adres e-mail poniżej.', 'sudecka-wataha'); ?>
            </p>
        <?php elseif ($sw_contact_feedback === 'invalid') : ?>
            <p class="sw-contact-form__notice sw-contact-form__notice--error" role="alert">
                <?php esc_html_e('Uzupełnij wymagane pola (imię i nazwisko, e-mail, treść) i sprawdź poprawność adresu.', 'sudecka-wataha'); ?>
            </p>
        <?php elseif ($sw_contact_feedback === 'error') : ?>
            <p class="sw-contact-form__notice sw-contact-form__notice--error" role="alert">
                <?php esc_html_e('Sesja wygasła lub żądanie było nieprawidłowe. Odśwież stronę i spróbuj jeszcze raz.', 'sudecka-wataha'); ?>
            </p>
        <?php elseif ($sw_contact_feedback === 'busy') : ?>
            <p class="sw-contact-form__notice sw-contact-form__notice--error" role="alert">
                <?php esc_html_e('Wysłano już kilka wiadomości z tego adresu. Odczekaj około dwudziestu minut lub napisz na e-mail poniżej.', 'sudecka-wataha'); ?>
            </p>
        <?php endif; ?>

        <p class="sw-contact-form__intro"><?php esc_html_e('Wypełnij formularz — trafi do naszej skrzynki. Możesz też napisać bezpośrednio:', 'sudecka-wataha'); ?>
            <a href="<?php echo esc_url('mailto:' . $sw_contact_email); ?>"><?php echo esc_html($sw_contact_email); ?></a>
        </p>

        <form class="sw-contact-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" novalidate>
            <input type="hidden" name="action" value="sudecka_contact">
            <?php wp_nonce_field('sudecka_contact', 'sudecka_contact_nonce'); ?>

            <p class="sw-contact-form__hp" aria-hidden="true">
                <label for="sw_website_url"><?php esc_html_e('Strona www (nie wypełniaj)', 'sudecka-wataha'); ?></label>
                <input type="text" name="sw_website_url" id="sw_website_url" value="" tabindex="-1" autocomplete="off">
            </p>

            <div class="sw-contact-form__grid">
                <p class="sw-contact-form__field">
                    <label class="sw-contact-form__label" for="sw_name"><?php esc_html_e('Imię i nazwisko', 'sudecka-wataha'); ?> <span class="sw-contact-form__req">*</span></label>
                    <input class="sw-contact-form__input" type="text" name="sw_name" id="sw_name" required autocomplete="name" maxlength="120">
                </p>
                <p class="sw-contact-form__field">
                    <label class="sw-contact-form__label" for="sw_email"><?php esc_html_e('E-mail', 'sudecka-wataha'); ?> <span class="sw-contact-form__req">*</span></label>
                    <input class="sw-contact-form__input" type="email" name="sw_email" id="sw_email" required autocomplete="email" maxlength="100">
                </p>
            </div>
            <p class="sw-contact-form__field">
                <label class="sw-contact-form__label" for="sw_subject"><?php esc_html_e('Temat (opcjonalnie)', 'sudecka-wataha'); ?></label>
                <input class="sw-contact-form__input" type="text" name="sw_subject" id="sw_subject" autocomplete="off" maxlength="160">
            </p>
            <p class="sw-contact-form__field">
                <label class="sw-contact-form__label" for="sw_message"><?php esc_html_e('Wiadomość', 'sudecka-wataha'); ?> <span class="sw-contact-form__req">*</span></label>
                <textarea class="sw-contact-form__textarea" name="sw_message" id="sw_message" required rows="6" maxlength="8000"></textarea>
            </p>
            <p class="sw-contact-form__actions">
                <button type="submit" class="sw-contact-form__submit"><?php esc_html_e('Wyślij wiadomość', 'sudecka-wataha'); ?></button>
            </p>
        </form>
    </section>

    <section class="sw-section sw-section--accent">
        <h2><?php esc_html_e('Dane do wpłat', 'sudecka-wataha'); ?></h2>
        <div class="sw-callout">
            <p class="m-0">
                <strong class="text-stone-700"><?php esc_html_e('Stowarzyszenie Strzelecki Klub Sportowy „Sudecka Wataha”', 'sudecka-wataha'); ?></strong><br>
                <?php esc_html_e('Nr konta w PKO Bank Polski:', 'sudecka-wataha'); ?>
                <span class="text-stone-700">39 1020 5112 0000 7002 0440 5098</span>
            </p>
        </div>
        <p><?php esc_html_e('w tytule wpłaty prosimy zamieścić: imię i nazwisko osoby wpłacającej oraz za co jest realizowana np. „…składka za rok 2022…”.', 'sudecka-wataha'); ?></p>
    </section>

    <?php get_template_part('template-parts/location', 'map'); ?>
</article>
