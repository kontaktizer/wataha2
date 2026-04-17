<?php
/**
 * Sudecka Wataha theme bootstrap.
 *
 * Po aktywacji motywu utwórz strony (Pages) ze slugami:
 * o-nas, jak-zostac-czlonkiem, patent-strzelecki, licencja-sportowa, pozwolenie-na-bron, kontakt
 * i ustaw stronę główną jako „Statyczna strona” w Ustawienia → Czytanie.
 *
 * Menu i linki używają adresów w stylu /o-nas/ — włącz „stałe linki” (Ustawienia → Bezpośrednie odnośniki),
 * inaczej home_url() może nie kierować na właściwe szablony stron.
 */

if (! defined('ABSPATH')) {
    exit;
}

define('SUDECKA_WATAHA_VER', '1.0.0');

/**
 * Adres logo klubu (PNG w assets/images).
 */
function sudecka_wataha_logo_url(): string
{
    return get_template_directory_uri() . '/assets/images/logo-sudecka-wataha.png';
}

/**
 * Link „Udostępnij” do miejsca w Mapach Google (np. maps.app.goo.gl).
 */
function sudecka_wataha_maps_place_url(): string
{
    return (string) apply_filters(
        'sudecka_wataha_maps_place_url',
        'https://maps.app.goo.gl/Ap4T4yaKguwpusWY6'
    );
}

/**
 * URL do osadzenia mapy (iframe) — domyślnie współrzędne Strzelnicy Sudeckiej.
 */
function sudecka_wataha_maps_embed_url(): string
{
    return (string) apply_filters(
        'sudecka_wataha_maps_embed_url',
        'https://www.google.com/maps?q=50.2868605%2C16.6288946&z=17&output=embed&hl=pl'
    );
}

/**
 * Adres e-mail do odbioru wiadomości z formularza kontaktowego (filtr: sudecka_wataha_contact_recipient).
 */
function sudecka_wataha_contact_recipient_email(): string
{
    return (string) apply_filters('sudecka_wataha_contact_recipient', 'sudeckawataha@gmail.com');
}

/**
 * Maks. liczba wysyłek formularza kontaktowego na IP w oknie czasowym (anty-spam).
 */
function sudecka_wataha_contact_rate_max(): int
{
    return (int) apply_filters('sudecka_wataha_contact_rate_max', 8);
}

function sudecka_wataha_contact_rate_window_seconds(): int
{
    return (int) apply_filters('sudecka_wataha_contact_rate_window_seconds', 20 * MINUTE_IN_SECONDS);
}

function sudecka_wataha_contact_rate_transient_key(): string
{
    $ip = isset($_SERVER['REMOTE_ADDR']) ? sanitize_text_field(wp_unslash($_SERVER['REMOTE_ADDR'])) : '';
    if ($ip === '') {
        $ip = 'na';
    }

    return 'sw_cf_' . md5($ip . 'sudecka_contact_v1');
}

/**
 * Obsługa formularza kontaktowego (POST → admin-post.php).
 */
function sudecka_wataha_handle_contact_form(): void
{
    $redirect_base = home_url('/kontakt/');

    if (! isset($_POST['sudecka_contact_nonce']) || ! wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['sudecka_contact_nonce'])), 'sudecka_contact')) {
        wp_safe_redirect(add_query_arg('contact', 'error', $redirect_base));
        exit;
    }

    if (! empty($_POST['sw_website_url'])) {
        wp_safe_redirect(add_query_arg('contact', 'thanks', $redirect_base));
        exit;
    }

    $name = isset($_POST['sw_name']) ? sanitize_text_field(wp_unslash($_POST['sw_name'])) : '';
    $email = isset($_POST['sw_email']) ? sanitize_email(wp_unslash($_POST['sw_email'])) : '';
    $subject_in = isset($_POST['sw_subject']) ? sanitize_text_field(wp_unslash($_POST['sw_subject'])) : '';
    $message = isset($_POST['sw_message']) ? sanitize_textarea_field(wp_unslash($_POST['sw_message'])) : '';

    if ($name === '' || ! is_email($email) || $message === '') {
        wp_safe_redirect(add_query_arg('contact', 'invalid', $redirect_base));
        exit;
    }

    $rate_key = sudecka_wataha_contact_rate_transient_key();
    $attempts = (int) get_transient($rate_key);
    if ($attempts >= sudecka_wataha_contact_rate_max()) {
        wp_safe_redirect(add_query_arg('contact', 'busy', $redirect_base));
        exit;
    }
    set_transient($rate_key, $attempts + 1, sudecka_wataha_contact_rate_window_seconds());

    $to = sudecka_wataha_contact_recipient_email();
    $blog = wp_specialchars_decode(get_bloginfo('name'), ENT_QUOTES);
    $subject = $subject_in !== ''
        ? '[' . $blog . '] ' . $subject_in
        : '[' . $blog . '] ' . __('Wiadomość z formularza kontaktowego', 'sudecka-wataha');
    $body = sprintf("%s\n\n%s %s\n%s %s\n\n%s\n", __('Wiadomość z formularza strony Kontakt', 'sudecka-wataha'), __('Od:', 'sudecka-wataha'), $name, __('E-mail:', 'sudecka-wataha'), $email, $message);
    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    ];

    $sent = wp_mail($to, $subject, $body, $headers);
    wp_safe_redirect(add_query_arg('contact', $sent ? 'thanks' : 'failed', $redirect_base));
    exit;
}
add_action('admin_post_nopriv_sudecka_contact', 'sudecka_wataha_handle_contact_form');
add_action('admin_post_sudecka_contact', 'sudecka_wataha_handle_contact_form');

/**
 * Theme setup.
 */
function sudecka_wataha_setup(): void
{
    load_theme_textdomain('sudecka-wataha', get_template_directory() . '/languages');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support(
        'html5',
        ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']
    );

    register_nav_menus([
        'primary' => __('Menu główne', 'sudecka-wataha'),
    ]);
}
add_action('after_setup_theme', 'sudecka_wataha_setup');

/**
 * Enqueue scripts and styles.
 */
function sudecka_wataha_assets(): void
{
    wp_enqueue_style(
        'sudecka-wataha-fonts',
        'https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Inter:wght@300;400;600&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'sudecka-wataha',
        get_stylesheet_uri(),
        [],
        SUDECKA_WATAHA_VER
    );

    wp_enqueue_style(
        'sudecka-wataha-theme',
        get_template_directory_uri() . '/assets/css/theme.css',
        ['sudecka-wataha-fonts', 'sudecka-wataha'],
        SUDECKA_WATAHA_VER
    );

    wp_enqueue_script(
        'sudecka-wataha-theme',
        get_template_directory_uri() . '/assets/js/theme.js',
        [],
        SUDECKA_WATAHA_VER,
        true
    );
}
add_action('wp_enqueue_scripts', 'sudecka_wataha_assets');

/**
 * @param bool $active Czy link jest bieżącą sekcją.
 */
function sudecka_wataha_nav_link_class(bool $active): string
{
    return 'sw-nav-link' . ($active ? ' sw-nav-link--active' : '');
}

/**
 * Główna nawigacja: krótki pasek + grupa „Formalności” (dropdown na desktop, rozwijane na mobile).
 */
function sudecka_wataha_render_primary_nav(): void
{
    $is_home = is_front_page();
    $is_o_nas = is_page('o-nas');
    $is_kontakt = is_page('kontakt');
    $procedures_slugs = ['jak-zostac-czlonkiem', 'patent-strzelecki', 'licencja-sportowa', 'pozwolenie-na-bron'];
    $procedures_open = false;
    foreach ($procedures_slugs as $slug) {
        if (is_page($slug)) {
            $procedures_open = true;
            break;
        }
    }

    $dropdown_links = [
        ['slug' => 'jak-zostac-czlonkiem', 'label' => __('Jak zostać członkiem?', 'sudecka-wataha')],
        ['slug' => 'patent-strzelecki', 'label' => __('Patent strzelecki', 'sudecka-wataha')],
        ['slug' => 'licencja-sportowa', 'label' => __('Licencja sportowa', 'sudecka-wataha')],
        ['slug' => 'pozwolenie-na-bron', 'label' => __('Pozwolenie na broń', 'sudecka-wataha')],
    ];
    ?>
    <div class="sw-nav__inner max-w-7xl mx-auto flex items-center justify-between gap-4 px-4 lg:px-8 py-3 min-h-[3.5rem]">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="sw-nav__brand shrink-0 no-underline group">
            <img
                src="<?php echo esc_url(sudecka_wataha_logo_url()); ?>"
                alt="<?php esc_attr_e('Strzelecki Klub Sportowy Sudecka Wataha', 'sudecka-wataha'); ?>"
                class="sw-nav__brand-logo"
                width="768"
                height="768"
                decoding="async"
            >
        </a>

        <div class="hidden lg:flex items-center gap-0.5 xl:gap-1" role="navigation" aria-label="<?php esc_attr_e('Menu główne', 'sudecka-wataha'); ?>">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="<?php echo esc_attr(sudecka_wataha_nav_link_class($is_home)); ?>">
                <?php esc_html_e('Start', 'sudecka-wataha'); ?>
            </a>
            <a href="<?php echo esc_url(home_url('/o-nas/')); ?>" class="<?php echo esc_attr(sudecka_wataha_nav_link_class($is_o_nas)); ?>">
                <?php esc_html_e('O nas', 'sudecka-wataha'); ?>
            </a>

            <div class="sw-nav__dropdown<?php echo $procedures_open ? ' sw-nav__dropdown--current' : ''; ?>">
                <button type="button" class="sw-nav__dropdown-trigger <?php echo esc_attr(sudecka_wataha_nav_link_class($procedures_open)); ?>" aria-expanded="false" aria-haspopup="true" aria-controls="sw-desktop-submenu">
                    <span><?php esc_html_e('Formalności', 'sudecka-wataha'); ?></span>
                    <svg class="sw-nav__chevron" width="12" height="12" viewBox="0 0 12 12" fill="none" stroke="currentColor" aria-hidden="true"><path d="M3 4.5L6 7.5L9 4.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
                <div class="sw-nav__dropdown-panel" id="sw-desktop-submenu" role="menu">
                    <?php foreach ($dropdown_links as $item) : ?>
                        <a role="menuitem" href="<?php echo esc_url(home_url('/' . $item['slug'] . '/')); ?>" class="sw-nav__dropdown-link<?php echo is_page($item['slug']) ? ' sw-nav__dropdown-link--active' : ''; ?>">
                            <?php echo esc_html($item['label']); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <a href="<?php echo esc_url(home_url('/kontakt/')); ?>" class="<?php echo esc_attr(sudecka_wataha_nav_link_class($is_kontakt)); ?>">
                <?php esc_html_e('Kontakt', 'sudecka-wataha'); ?>
            </a>
        </div>

        <button type="button" class="mobile-nav-toggle lg:hidden" aria-expanded="false" aria-controls="sw-mobile-nav">
            <?php esc_html_e('Menu', 'sudecka-wataha'); ?>
        </button>
    </div>

    <div id="sw-mobile-nav" class="mobile-nav-panel lg:hidden border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 py-2 pb-4">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="mobile-nav-panel__link<?php echo $is_home ? ' mobile-nav-panel__link--active' : ''; ?>"><?php esc_html_e('Start', 'sudecka-wataha'); ?></a>
            <a href="<?php echo esc_url(home_url('/o-nas/')); ?>" class="mobile-nav-panel__link<?php echo $is_o_nas ? ' mobile-nav-panel__link--active' : ''; ?>"><?php esc_html_e('O nas', 'sudecka-wataha'); ?></a>

            <details class="mobile-nav-details"<?php echo $procedures_open ? ' open' : ''; ?>>
                <summary class="mobile-nav-details__summary"><?php esc_html_e('Formalności i procedury', 'sudecka-wataha'); ?></summary>
                <div class="mobile-nav-details__links">
                    <?php foreach ($dropdown_links as $item) : ?>
                        <a href="<?php echo esc_url(home_url('/' . $item['slug'] . '/')); ?>" class="mobile-nav-panel__link mobile-nav-panel__link--sub<?php echo is_page($item['slug']) ? ' mobile-nav-panel__link--active' : ''; ?>"><?php echo esc_html($item['label']); ?></a>
                    <?php endforeach; ?>
                </div>
            </details>

            <a href="<?php echo esc_url(home_url('/kontakt/')); ?>" class="mobile-nav-panel__link<?php echo $is_kontakt ? ' mobile-nav-panel__link--active' : ''; ?>"><?php esc_html_e('Kontakt', 'sudecka-wataha'); ?></a>
        </div>
    </div>
    <?php
}
