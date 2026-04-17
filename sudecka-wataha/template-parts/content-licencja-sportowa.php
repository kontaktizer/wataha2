<?php
if (! defined('ABSPATH')) {
    exit;
}

$pzss_kalendarz = 'https://www.pzss.org.pl/kalendarz';
$dzss_kalendarz = 'https://www.dzss.pl/kalendarzdzss';
?>
<article class="sw-article sw-article--about prose-page page-inner">
    <header class="sw-page-head">
        <div class="sw-page-head__text">
            <p class="sw-eyebrow"><?php esc_html_e('Formalności', 'sudecka-wataha'); ?></p>
            <h1 class="page-title font-serif"><?php esc_html_e('Licencja sportowa', 'sudecka-wataha'); ?></h1>
            <p class="sw-lead"><?php esc_html_e('Pierwsza licencja i przedłużenie — procedura w systemie PZSS.', 'sudecka-wataha'); ?></p>
        </div>
        <figure class="sw-media sw-media--portrait sw-page-head__media" aria-label="<?php esc_attr_e('Miejsce na zdjęcie', 'sudecka-wataha'); ?>">
            <div class="sw-media__frame">
                <span class="sw-media__glyph" aria-hidden="true"></span>
                <span class="sw-media__hint"><?php esc_html_e('Zdjęcie', 'sudecka-wataha'); ?></span>
                <span class="sw-media__sub"><?php esc_html_e(' np. licencja, zawody, medal.', 'sudecka-wataha'); ?></span>
            </div>
        </figure>
    </header>

    <section class="sw-section">
        <h2><?php esc_html_e('Pierwsza licencja', 'sudecka-wataha'); ?></h2>
        <p><?php esc_html_e('Pierwsza licencja sportowa jest wydawana na podstawie uzyskanego patentu strzeleckiego. Przed wypełnieniem wniosku o nadanie licencji sportowej miej jednakże na uwadze, iż:', 'sudecka-wataha'); ?></p>
        <ul>
            <li><?php esc_html_e('Licencja sportowa jest nadawana na rok kalendarzowy, tj. licencja uzyskana we wrześniu jest ważna do końca grudnia danego roku;', 'sudecka-wataha'); ?></li>
            <li><?php esc_html_e('Aby uzyskać przedłużenie licencji bez dodatkowych opłat dla PZSS, należy wykazać minimalną wymaganą do przedłużenia ilość startów, tj.: dla dyscypliny wiodącej: 4 starty do końca roku kalendarzowego; dla dyscyplin dodatkowych: po 2 starty do końca roku kalendarzowego. Stąd istotne jest, aby nie wnioskować o nadanie licencji na sam koniec roku, ponieważ można nie zdążyć z wypełnieniem wymogu startowego, co wiąże się z odrębnymi przepisami oraz opłatami.', 'sudecka-wataha'); ?></li>
        </ul>

        <h3><?php esc_html_e('Procedura — pierwsza licencja', 'sudecka-wataha'); ?></h3>
        <ol>
            <li><?php esc_html_e('Zaloguj się na swój profil zawodnika w systemie informatycznym PZSS oraz w zakładce „Wnioski – licencje zawodnicze” wybierz wniosek o nową licencję.', 'sudecka-wataha'); ?></li>
            <li><?php esc_html_e('Po wypełnieniu i wysłaniu wniosku, wykonaj przelew na ok. 50 zł na konto Klubu tytułem: „[imię i nazwisko] licencja zawodnicza 2023”.', 'sudecka-wataha'); ?></li>
            <li><?php esc_html_e('Wyślij e-mail na adres Klubu (sudeckawataha@gmail.com) z informacją o wysłanym wniosku o nadanie licencji zawodniczej.', 'sudecka-wataha'); ?></li>
            <li><?php esc_html_e('Po zaksięgowaniu Twojego przelewu, Klub zatwierdzi Twój wniosek. Następnie wniosek zostanie zatwierdzony przez DZSS po zaksięgowaniu przelewu na konto DZSS.', 'sudecka-wataha'); ?></li>
            <li><?php esc_html_e('Po akceptacji DZSS, PZSS nada Twoją licencję w przeciągu 30 dni. Po nadaniu będzie ona dostępna do pobrania w systemie informatycznym w zakładce „Licencje i patenty”.', 'sudecka-wataha'); ?></li>
        </ol>
        <p><strong class="sw-emphasis"><?php esc_html_e('UWAGA:', 'sudecka-wataha'); ?></strong>
            <?php esc_html_e('Licencja zawodnicza w formie karty plastikowej dociera do Klubu z opóźnieniem. Jeżeli wybierasz się na zawody strzeleckie a nie masz jeszcze dokumentu plastikowego, wydrukuj pobraną z systemu licencję z elektronicznym podpisem aby móc przedłożyć ten dokument sędziemu podczas rejestracji do startu.', 'sudecka-wataha'); ?>
        </p>
    </section>

    <figure class="sw-media sw-media--landscape" aria-label="<?php esc_attr_e('Miejsce na zdjęcie', 'sudecka-wataha'); ?>">
        <div class="sw-media__frame">
            <span class="sw-media__glyph" aria-hidden="true"></span>
            <span class="sw-media__hint"><?php esc_html_e('Miejsce na zdjęcie', 'sudecka-wataha'); ?></span>
            <span class="sw-media__sub"><?php esc_html_e(' np. tarcza, zawodnik na linii strzeleckiej.', 'sudecka-wataha'); ?></span>
        </div>
    </figure>

    <section class="sw-section sw-section--accent">
        <h2><?php esc_html_e('Przedłużenie licencji', 'sudecka-wataha'); ?></h2>
        <p><?php esc_html_e('Wnioski o przedłużenie licencji można wysyłać najwcześniej w listopadzie bieżącego roku, jednakże najpierw Klub musi uzyskać przedłużenie licencji klubowej, które wymaga przedstawienia m.in. dowodu uczestnictwa zawodników reprezentujących nasz Klub w co najmniej 4 zawodach klasyfikacji indywidualnej we współzawodnictwie sportowym organizowanym w aktualnym roku kalendarzowym przez PZSS / DZSS.', 'sudecka-wataha'); ?></p>
        <p><?php esc_html_e('Stąd apelujemy o uczestnictwo w imprezach sportowych, które są zamieszczone w kalendarzu:', 'sudecka-wataha'); ?></p>
        <ul>
            <li><a href="<?php echo esc_url($pzss_kalendarz); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Polskiego Związku Strzelectwa Sportowego (PZSS) — Kalendarz', 'sudecka-wataha'); ?></a></li>
            <li><a href="<?php echo esc_url($dzss_kalendarz); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Dolnośląskiego Związku Strzelectwa Sportowego (DZSS) — Kalendarz', 'sudecka-wataha'); ?></a></li>
        </ul>
        <p><?php esc_html_e('Oraz jak najszybsze wysłanie wypełnionej tabeli startów na adres Klubu (sudeckawataha@gmail.com) co przyspieszy proces przedłużenia licencji klubowej.', 'sudecka-wataha'); ?></p>

        <h3><?php esc_html_e('Procedura — przedłużenie', 'sudecka-wataha'); ?></h3>
        <ol>
            <li><?php esc_html_e('Wyślij e-mail z uzupełnioną tabelę swoich startów na dany rok kalendarzowy na adres Klubu (sudeckawataha@gmail.com);', 'sudecka-wataha'); ?></li>
            <li><?php esc_html_e('Wyślij przelewem ok. 50 zł na konto Klubu tytułem: „[imię i nazwisko] przedłużenie licencji zawodniczej na rok 2024”.', 'sudecka-wataha'); ?></li>
            <li><?php esc_html_e('Wypełnij wniosek o przedłużenie licencji w systemie informatycznym PZSS.', 'sudecka-wataha'); ?></li>
            <li><?php esc_html_e('Po weryfikacji Twoich startów oraz zaksięgowaniu opłaty za licencję zawodniczą Klub zaakceptuje Twój wniosek, który następnie trafi do akceptacji przez DZSS.', 'sudecka-wataha'); ?></li>
            <li><?php esc_html_e('Po akceptacji wniosku przez DZSS, PZSS przedłuży Twoją licencję w ciągu 30 dni. Po przedłużeniu licencji przez PZSS, będzie ona dostępna do pobrania w zakładce „Licencje i patenty”.', 'sudecka-wataha'); ?></li>
        </ol>
        <p><strong class="sw-emphasis"><?php esc_html_e('UWAGA:', 'sudecka-wataha'); ?></strong>
            <?php esc_html_e('Licencja zawodnicza w formie karty plastikowej dociera do Klubu z opóźnieniem. Jeżeli wybierasz się na zawody strzeleckie a nie masz jeszcze dokumentu plastikowego, wydrukuj pobraną z systemu licencję z elektronicznym podpisem aby móc przedłożyć ten dokument sędziemu podczas rejestracji do startu.', 'sudecka-wataha'); ?>
        </p>
    </section>
</article>
