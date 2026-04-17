<?php
if (! defined('ABSPATH')) {
    exit;
}

$patent_portal = 'https://patentstrzelecki.eu/';
$kalendarz_url = home_url('/kalendarz/');
?>
<article class="sw-article sw-article--about prose-page page-inner">
    <header class="sw-page-head">
        <div class="sw-page-head__text">
            <p class="sw-eyebrow"><?php esc_html_e('Formalności', 'sudecka-wataha'); ?></p>
            <h1 class="page-title font-serif"><?php esc_html_e('Patent strzelecki', 'sudecka-wataha'); ?></h1>
            <p class="sw-lead"><?php esc_html_e('Procedura PZSS, staż, egzamin teoretyczny i praktyczny — krok po kroku.', 'sudecka-wataha'); ?></p>
        </div>
        <figure class="sw-media sw-media--landscape sw-page-head__media" aria-label="<?php esc_attr_e('Miejsce na zdjęcie', 'sudecka-wataha'); ?>">
            <div class="sw-media__frame">
                <span class="sw-media__glyph" aria-hidden="true"></span>
                <span class="sw-media__hint"><?php esc_html_e('Miejsce na zdjęcie', 'sudecka-wataha'); ?></span>
                <span class="sw-media__sub"><?php esc_html_e(' np. egzamin, strzelnica, tarcza.', 'sudecka-wataha'); ?></span>
            </div>
        </figure>
    </header>

    <section class="sw-section">
        <h2><?php esc_html_e('Procedura uzyskania patentu strzeleckiego', 'sudecka-wataha'); ?></h2>
        <p><?php esc_html_e('Patent strzelecki uprawnia do ubiegania się o licencję sportową, która jest konieczna w celu uzyskania pozwolenia na broń do celów sportowych. Procedura dopuszczenia do egzaminu na patent strzelecki wygląda następująco:', 'sudecka-wataha'); ?></p>
        <ol>
            <li><?php esc_html_e('Utworzenie profilu zawodnika w systemie informatycznym Polskiego Związku Strzelectwa Sportowego (PZSS) następuje w momencie podjęcia decyzji Zarządu o przyjęciu do Klubu;', 'sudecka-wataha'); ?></li>
            <li><?php esc_html_e('Po utworzeniu przez Klub Twojego profilu otrzymasz e-mail z danymi do logowania. Należy się zalogować, załączyć swoje zdjęcie oraz sprawdzić poprawność wprowadzonych danych;', 'sudecka-wataha'); ?></li>
            <li><?php esc_html_e('W momencie utworzenia profilu w systemie zaczyna się Twój staż treningowy.', 'sudecka-wataha'); ?></li>
            <li><?php esc_html_e('Po upływie 1-miesięcznego* stażu możesz się zapisać na egzamin: należy się zalogować do systemu informatycznego oraz w zakładce „Egzaminy na patent”, „Pokaż przyszłe egzaminy” wybrać dostępny termin (możliwość zapisu otwiera się w systemie po godzinie 00:00 zazwyczaj na 7 dni przed terminem egzaminu);', 'sudecka-wataha'); ?></li>
            <li><?php esc_html_e('Po wybraniu terminu dokonaj opłaty 400 zł za egzamin na konto PZSS (uwaga: wyłącznie przez system dot pay);', 'sudecka-wataha'); ?></li>
            <li><?php esc_html_e('Wypełnij wniosek (generowany automatycznie w systemie informatycznym PZSS) ze wskazaniem pożądanych dyscyplin (zachęcamy do wybrania wszystkich, tj. pistolet, karabin, strzelba gładkolufowa);', 'sudecka-wataha'); ?></li>
            <li><?php esc_html_e('Wykonaj badania lekarskie i uzyskaj zaświadczenie o braku przeciwskazań zdrowotnych do uprawiania strzelectwa — koszt orientacyjny 200–300 zł, podpis lekarza na wniosku o patent strzelecki (uwaga: zgodnie z interpretacją PZSS badania nie muszą być wykonane u lekarza medycyny sportowej);', 'sudecka-wataha'); ?></li>
            <li><?php esc_html_e('Skontaktuj się z Kierownikiem Klubu aby uzyskać potwierdzenie przynależności i stażu zawodniczego — podpis Kierownika na wniosku.', 'sudecka-wataha'); ?></li>
        </ol>
        <p class="sw-muted"><?php esc_html_e('* Zgodnie z nowelizacją ustawy z dnia 21 maja 1999 roku o broni i amunicji dokonanej na podstawie art. 10 ust. 2 ustawy z dnia 26 stycznia 2023 roku o zmianie ustaw w celu likwidowania zbędnych barier administracyjnych i prawnych. Przed nowelizacją, minimalny staż treningowy umożliwiający dopuszczenie do egzaminu wynosił 3 miesiące.', 'sudecka-wataha'); ?></p>
    </section>

    <figure class="sw-media sw-media--landscape" aria-label="<?php esc_attr_e('Miejsce na zdjęcie', 'sudecka-wataha'); ?>">
        <div class="sw-media__frame">
            <span class="sw-media__glyph" aria-hidden="true"></span>
            <span class="sw-media__hint"><?php esc_html_e('Zdjęcie', 'sudecka-wataha'); ?></span>
            <span class="sw-media__sub"><?php esc_html_e(' np. materiały szkoleniowe lub strzelanie.', 'sudecka-wataha'); ?></span>
        </div>
    </figure>

    <section class="sw-section sw-section--accent">
        <h2><?php esc_html_e('Przygotowanie do egzaminu', 'sudecka-wataha'); ?></h2>
        <p><?php esc_html_e('W trakcie odbywania stażu zawodniczego przygotowuj się do części teoretycznej egzaminu poprzez studiowanie Ustawy o Broni i Amunicji oraz związanych z nią rozporządzeń, regulaminów sportowych oraz zasad bezpieczeństwa w sporcie strzeleckim. Polecamy korzystanie z portalu stworzonego przez Braterstwo (KS Amator) pod adresem:', 'sudecka-wataha'); ?>
            <a href="<?php echo esc_url($patent_portal); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('PatentStrzelecki.eu', 'sudecka-wataha'); ?></a>.
            <?php esc_html_e('Miej jednakże na uwadze, iż pula pytań na prawdziwym egzaminie jest otwarta, tzn. możesz trafić na pytanie, które nie zostało opracowane w wyżej wymienionym kursie. Stąd polecamy zapoznanie się z materiałami źródłowymi. Szkolenia przygotowujące do części praktycznej odbywają się w naszym Klubie min. 4 razy w ciągu roku — informacja o najbliższym szkoleniu na stronie', 'sudecka-wataha'); ?>
            <a href="<?php echo esc_url($kalendarz_url); ?>"><?php esc_html_e('Członkostwo: Kalendarz', 'sudecka-wataha'); ?></a>.
        </p>
    </section>

    <section class="sw-section">
        <h2><?php esc_html_e('Przystąpienie do egzaminu', 'sudecka-wataha'); ?></h2>
        <p><?php esc_html_e('W dniu egzaminu weź ze sobą następujące dokumenty:', 'sudecka-wataha'); ?></p>
        <ul>
            <li><?php esc_html_e('wypełniony wniosek o nadanie patentu strzeleckiego (ze wszystkimi wymaganymi podpisami),', 'sudecka-wataha'); ?></li>
            <li><?php esc_html_e('zaświadczenie o braku przeciwskazań zdrowotnych do uprawiania strzelectwa (w przypadku badań u lekarza pierwszego kontaktu),', 'sudecka-wataha'); ?></li>
            <li><?php esc_html_e('dowód osobisty lub paszport.', 'sudecka-wataha'); ?></li>
        </ul>
    </section>

    <section class="sw-section">
        <h2><?php esc_html_e('Przebieg egzaminu', 'sudecka-wataha'); ?></h2>
        <p><?php esc_html_e('Egzamin na patent składa się z dwóch części: teoretycznej i praktycznej. Pierwsza to część teoretyczna.', 'sudecka-wataha'); ?></p>

        <h3><?php esc_html_e('Część teoretyczna', 'sudecka-wataha'); ?></h3>
        <ul>
            <li><?php esc_html_e('czas trwania 20 min,', 'sudecka-wataha'); ?></li>
            <li><?php esc_html_e('10 pytań w formie testu: po 2 pytania z następujących bloków tematycznych: ustawa o broni i amunicji oraz przepisy wydane na jej podstawie, zasady bezpieczeństwa przy użytkowaniu broni strzeleckiej, regulaminy strzeleckie, budowa i zasady działania oraz dane techniczne broni do strzelań sportowych, przepisy kodeksu karnego dotyczące przestępstw związanych z bronią,', 'sudecka-wataha'); ?></li>
            <li><?php esc_html_e('zaznaczenie błędnej odpowiedzi na którekolwiek z pierwszych 4 pytań skutkuje nie zaliczeniem części teoretycznej i brakiem dopuszczenia do części praktycznej,', 'sudecka-wataha'); ?></li>
            <li><?php esc_html_e('istnieje możliwość udzielenia 1 błędnej odpowiedzi w kolejnych pytaniach (pytania od nr 5. do 10.).', 'sudecka-wataha'); ?></li>
        </ul>

        <h3><?php esc_html_e('Część praktyczna', 'sudecka-wataha'); ?></h3>
        <p><?php esc_html_e('Część praktyczna składa się ze sprawdzenia przestrzegania regulaminu strzelnicy, sprawdzenia umiejętności wykonywania czynności z bronią (rozkładanie i składanie broni, ładowanie i rozładowywanie, zabezpieczanie broni, usuwanie zacięć) oraz sprawdzianu strzeleckiego z użyciem wszystkich broni wskazanych we wniosku.', 'sudecka-wataha'); ?></p>

        <h3><?php esc_html_e('Wymagania — pistolet', 'sudecka-wataha'); ?></h3>
        <ul>
            <li><?php esc_html_e('czas trwania: 5 min', 'sudecka-wataha'); ?></li>
            <li><?php esc_html_e('postawa stojąca', 'sudecka-wataha'); ?></li>
            <li><?php esc_html_e('ilość strzałów: 5 — boczny lub centralny zapłon (odległość 25 m, rozrzut min. 4 przestrzelin na tarczy musi się zmieścić w pierścieniu o średnicy 15 cm) lub pneumatyczny (odległość 10 m, rozrzut min. 4 przestrzelin na tarczy musi się zmieścić w pierścieniu o średnicy 5 cm)', 'sudecka-wataha'); ?></li>
        </ul>

        <h3><?php esc_html_e('Wymagania — karabin', 'sudecka-wataha'); ?></h3>
        <ul>
            <li><?php esc_html_e('czas trwania: 5 min', 'sudecka-wataha'); ?></li>
            <li><?php esc_html_e('ilość strzałów: 5 — boczny zapłon (odległość 50 m, postawa leżąca, rozrzut min. 4 przestrzelin na tarczy musi się zmieścić w pierścieniu o średnicy 5 cm) lub pneumatyczny (odległość 10 m, postawa stojąca, rozrzut min. 4 przestrzelin na tarczy musi się zmieścić w pierścieniu o średnicy 2 cm)', 'sudecka-wataha'); ?></li>
        </ul>

        <h3><?php esc_html_e('Wymagania — strzelba gładkolufowa', 'sudecka-wataha'); ?></h3>
        <ul>
            <li><?php esc_html_e('ilość strzałów: 5', 'sudecka-wataha'); ?></li>
            <li><?php esc_html_e('postawa stojąca — latający rzutek (trap): odległość 15 m, trafienie co najmniej 3 rzutków, czas 6 min; lub cele reaktywne (poppery): odległość min. 10 m, trafienie co najmniej 4 celów, czas 3 min.', 'sudecka-wataha'); ?></li>
        </ul>
    </section>
</article>
