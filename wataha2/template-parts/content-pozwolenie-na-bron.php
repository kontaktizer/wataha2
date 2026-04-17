<?php
if (! defined('ABSPATH')) {
    exit;
}

$fia_info = 'https://www.fia.com.pl/';
$nts_przepisy = 'http://www.towarzystwostrzeleckie.org/przepisy-formalno-prawne/';
$nts_egzamin = 'http://www.towarzystwostrzeleckie.org/egzamin-na-pozwolenie-kolekcjonerskie/';
?>
<article class="sw-article sw-article--about prose-page page-inner">
    <header class="sw-page-head">
        <div class="sw-page-head__text">
            <p class="sw-eyebrow"><?php esc_html_e('Formalności', 'sudecka-wataha'); ?></p>
            <h1 class="page-title font-serif"><?php esc_html_e('Pozwolenie na broń', 'sudecka-wataha'); ?></h1>
            <p class="sw-lead"><?php esc_html_e('Ścieżka sportowa i kolekcjonerska — kroki, dokumenty i porównanie.', 'sudecka-wataha'); ?></p>
        </div>
        <figure class="sw-media sw-media--landscape sw-page-head__media" aria-label="<?php esc_attr_e('Miejsce na zdjęcie', 'sudecka-wataha'); ?>">
            <div class="sw-media__frame">
                <span class="sw-media__glyph" aria-hidden="true"></span>
                <span class="sw-media__hint"><?php esc_html_e('Miejsce na zdjęcie', 'sudecka-wataha'); ?></span>
                <span class="sw-media__sub"><?php esc_html_e(' np. gabinet, dokumenty, broń w szafie.', 'sudecka-wataha'); ?></span>
            </div>
        </figure>
    </header>

    <section class="sw-section sw-section--roadmap" id="roadmapa-pozwolenie">
        <h2><?php esc_html_e('Roadmapa: krok po kroku', 'sudecka-wataha'); ?></h2>
        <p><?php esc_html_e('Dwie ścieżki prowadzą do pozwolenia na broń. Tam, gdzie się pokrywają — widzisz wspólny krok.', 'sudecka-wataha'); ?></p>

        <div class="sw-timeline is-path-sport" data-timeline>
            <div class="sw-timeline__legend" aria-label="<?php esc_attr_e('Legenda', 'sudecka-wataha'); ?>">
                <span class="sw-timeline__legend-item"><span class="sw-timeline__legend-dot sw-timeline__legend-dot--sport" aria-hidden="true"></span><?php esc_html_e('Ścieżka sportowa', 'sudecka-wataha'); ?></span>
                <span class="sw-timeline__legend-item"><span class="sw-timeline__legend-dot sw-timeline__legend-dot--kolekcja" aria-hidden="true"></span><?php esc_html_e('Ścieżka kolekcjonerska', 'sudecka-wataha'); ?></span>
                <span class="sw-timeline__legend-item"><span class="sw-timeline__legend-dot sw-timeline__legend-dot--shared" aria-hidden="true"></span><?php esc_html_e('Wspólny krok', 'sudecka-wataha'); ?></span>
            </div>

            <div class="sw-timeline__switcher" data-timeline-switch>
                <button type="button" class="sw-timeline__switch-btn is-active" data-timeline-path="sport"><?php esc_html_e('Ścieżka sportowa', 'sudecka-wataha'); ?></button>
                <button type="button" class="sw-timeline__switch-btn" data-timeline-path="kolekcja"><?php esc_html_e('Ścieżka kolekcjonerska', 'sudecka-wataha'); ?></button>
            </div>

            <ol class="sw-timeline__track" aria-label="<?php esc_attr_e('Kroki do pozwolenia na broń', 'sudecka-wataha'); ?>">

                <li class="sw-timeline__row sw-timeline__row--split">
                    <article class="sw-timeline__card sw-timeline__card--sport" data-path="sport">
                        <span class="sw-timeline__card-label"><?php esc_html_e('Sportowe', 'sudecka-wataha'); ?></span>
                        <h4><?php esc_html_e('Dołącz do klubu strzeleckiego', 'sudecka-wataha'); ?></h4>
                        <p><?php esc_html_e('wpisowe + składka + deklaracja', 'sudecka-wataha'); ?></p>
                    </article>
                    <span class="sw-timeline__node" aria-hidden="true"><span class="sw-timeline__badge">01</span></span>
                    <article class="sw-timeline__card sw-timeline__card--kolekcja" data-path="kolekcja">
                        <span class="sw-timeline__card-label"><?php esc_html_e('Kolekcjonerskie', 'sudecka-wataha'); ?></span>
                        <h4><?php esc_html_e('Dołącz do stowarzyszenia kolekcjonerskiego', 'sudecka-wataha'); ?></h4>
                        <p><?php esc_html_e('wpisowe + składka + deklaracja', 'sudecka-wataha'); ?></p>
                    </article>
                </li>

                <li class="sw-timeline__row sw-timeline__row--split">
                    <article class="sw-timeline__card sw-timeline__card--sport" data-path="sport">
                        <span class="sw-timeline__card-label"><?php esc_html_e('Sportowe', 'sudecka-wataha'); ?></span>
                        <h4><?php esc_html_e('Zdaj egzamin na patent PZSS', 'sudecka-wataha'); ?></h4>
                        <p><?php esc_html_e('teoria + praktyka (400 zł) · min. 3 mies. stażu', 'sudecka-wataha'); ?></p>
                    </article>
                    <span class="sw-timeline__node" aria-hidden="true"><span class="sw-timeline__badge">02</span></span>
                    <article class="sw-timeline__card sw-timeline__card--kolekcja" data-path="kolekcja">
                        <span class="sw-timeline__card-label"><?php esc_html_e('Kolekcjonerskie', 'sudecka-wataha'); ?></span>
                        <h4><?php esc_html_e('Przygotuj teorię i praktykę', 'sudecka-wataha'); ?></h4>
                        <p><?php esc_html_e('ustawy + trening + obsługa broni', 'sudecka-wataha'); ?></p>
                    </article>
                </li>

                <li class="sw-timeline__row sw-timeline__row--solo">
                    <article class="sw-timeline__card sw-timeline__card--sport" data-path="sport">
                        <span class="sw-timeline__card-label"><?php esc_html_e('Tylko sportowe', 'sudecka-wataha'); ?></span>
                        <h4><?php esc_html_e('Wystąp o licencję PZSS', 'sudecka-wataha'); ?></h4>
                        <p><?php esc_html_e('formalność klubowa · ok. 50 zł', 'sudecka-wataha'); ?></p>
                    </article>
                    <span class="sw-timeline__node" aria-hidden="true"><span class="sw-timeline__badge">03</span></span>
                    <span class="sw-timeline__void" aria-hidden="true"></span>
                </li>

                <li class="sw-timeline__row sw-timeline__row--solo">
                    <article class="sw-timeline__card sw-timeline__card--sport" data-path="sport">
                        <span class="sw-timeline__card-label"><?php esc_html_e('Tylko sportowe', 'sudecka-wataha'); ?></span>
                        <h4><?php esc_html_e('Startuj w zawodach', 'sudecka-wataha'); ?></h4>
                        <p><?php esc_html_e('buduj historię startów', 'sudecka-wataha'); ?></p>
                    </article>
                    <span class="sw-timeline__node" aria-hidden="true"><span class="sw-timeline__badge">04</span></span>
                    <span class="sw-timeline__void" aria-hidden="true"></span>
                </li>

                <li class="sw-timeline__row sw-timeline__row--shared">
                    <article class="sw-timeline__card sw-timeline__card--shared" data-path="shared">
                        <span class="sw-timeline__badge sw-timeline__badge--shared" aria-hidden="true">05</span>
                        <div class="sw-timeline__card-inner">
                            <span class="sw-timeline__tag"><?php esc_html_e('Wspólny krok', 'sudecka-wataha'); ?></span>
                            <h4><?php esc_html_e('Uzyskaj zaświadczenie o członkostwie', 'sudecka-wataha'); ?></h4>
                            <p><?php esc_html_e('dokument do WPA', 'sudecka-wataha'); ?></p>
                        </div>
                    </article>
                </li>

                <li class="sw-timeline__row sw-timeline__row--shared">
                    <article class="sw-timeline__card sw-timeline__card--shared" data-path="shared">
                        <span class="sw-timeline__badge sw-timeline__badge--shared" aria-hidden="true">06</span>
                        <div class="sw-timeline__card-inner">
                            <span class="sw-timeline__tag"><?php esc_html_e('Wspólny krok', 'sudecka-wataha'); ?></span>
                            <h4><?php esc_html_e('Badania lekarskie i psychologiczne', 'sudecka-wataha'); ?></h4>
                            <p><?php esc_html_e('500–700 zł · ważność ok. 3 mies.', 'sudecka-wataha'); ?></p>
                        </div>
                    </article>
                </li>

                <li class="sw-timeline__row sw-timeline__row--split">
                    <article class="sw-timeline__card sw-timeline__card--sport" data-path="sport">
                        <span class="sw-timeline__card-label"><?php esc_html_e('Sportowe', 'sudecka-wataha'); ?></span>
                        <h4><?php esc_html_e('Złóż wniosek do WPA', 'sudecka-wataha'); ?></h4>
                        <p><?php esc_html_e('pozwolenie sportowe · 242 zł', 'sudecka-wataha'); ?></p>
                    </article>
                    <span class="sw-timeline__node" aria-hidden="true"><span class="sw-timeline__badge">07</span></span>
                    <article class="sw-timeline__card sw-timeline__card--kolekcja" data-path="kolekcja">
                        <span class="sw-timeline__card-label"><?php esc_html_e('Kolekcjonerskie', 'sudecka-wataha'); ?></span>
                        <h4><?php esc_html_e('Złóż wniosek do WPA', 'sudecka-wataha'); ?></h4>
                        <p><?php esc_html_e('pozwolenie kolekcjonerskie · 242 zł', 'sudecka-wataha'); ?></p>
                    </article>
                </li>

                <li class="sw-timeline__row sw-timeline__row--split">
                    <article class="sw-timeline__card sw-timeline__card--sport sw-timeline__card--highlight" data-path="sport">
                        <span class="sw-timeline__card-label"><?php esc_html_e('Sportowe', 'sudecka-wataha'); ?></span>
                        <h4><?php esc_html_e('Omijasz egzamin WPA', 'sudecka-wataha'); ?></h4>
                        <p><?php esc_html_e('patent + licencja = duży skrót', 'sudecka-wataha'); ?></p>
                    </article>
                    <span class="sw-timeline__node" aria-hidden="true"><span class="sw-timeline__badge">08</span></span>
                    <article class="sw-timeline__card sw-timeline__card--kolekcja" data-path="kolekcja">
                        <span class="sw-timeline__card-label"><?php esc_html_e('Kolekcjonerskie', 'sudecka-wataha'); ?></span>
                        <h4><?php esc_html_e('Zdaj egzamin WPA', 'sudecka-wataha'); ?></h4>
                        <p><?php esc_html_e('teoria + praktyka · ok. 1 150 zł', 'sudecka-wataha'); ?></p>
                    </article>
                </li>

                <li class="sw-timeline__row sw-timeline__row--shared">
                    <article class="sw-timeline__card sw-timeline__card--shared" data-path="shared">
                        <span class="sw-timeline__badge sw-timeline__badge--shared" aria-hidden="true">09</span>
                        <div class="sw-timeline__card-inner">
                            <span class="sw-timeline__tag"><?php esc_html_e('Wspólny krok', 'sudecka-wataha'); ?></span>
                            <h4><?php esc_html_e('Wystąp o promesy', 'sudecka-wataha'); ?></h4>
                            <p><?php esc_html_e('zaświadczenia do zakupu · 17 zł / szt.', 'sudecka-wataha'); ?></p>
                        </div>
                    </article>
                </li>

                <li class="sw-timeline__row sw-timeline__row--shared">
                    <article class="sw-timeline__card sw-timeline__card--shared" data-path="shared">
                        <span class="sw-timeline__badge sw-timeline__badge--shared" aria-hidden="true">10</span>
                        <div class="sw-timeline__card-inner">
                            <span class="sw-timeline__tag"><?php esc_html_e('Wspólny krok', 'sudecka-wataha'); ?></span>
                            <h4><?php esc_html_e('Kup i zamontuj szafę S1', 'sudecka-wataha'); ?></h4>
                            <p><?php esc_html_e('bezpieczne przechowywanie broni', 'sudecka-wataha'); ?></p>
                        </div>
                    </article>
                </li>

                <li class="sw-timeline__row sw-timeline__row--shared sw-timeline__row--finish">
                    <article class="sw-timeline__card sw-timeline__card--shared sw-timeline__card--finish" data-path="shared">
                        <span class="sw-timeline__badge sw-timeline__badge--finish" aria-hidden="true">&#10003;</span>
                        <div class="sw-timeline__card-inner">
                            <h4><?php esc_html_e('Kup broń i amunicję', 'sudecka-wataha'); ?></h4>
                            <p><?php esc_html_e('Finał ścieżki — gratulacje!', 'sudecka-wataha'); ?></p>
                        </div>
                    </article>
                </li>
            </ol>
        </div>

        <div class="sw-roadmap-summary">
            <article class="sw-roadmap-summary__card sw-roadmap-summary__card--sport">
                <h4><?php esc_html_e('Pozwolenie sportowe', 'sudecka-wataha'); ?></h4>
                <ul>
                    <li><?php esc_html_e('Czas: zwykle ok. 6–8 miesięcy', 'sudecka-wataha'); ?></li>
                    <li><?php esc_html_e('Egzamin: patent PZSS (zamiast egzaminu WPA)', 'sudecka-wataha'); ?></li>
                    <li><?php esc_html_e('Koszty kluczowe: badanie lekarskie 200–300 zł, licencja zawodnicza ok. 50 zł, badania lek. i psych. 500–700 zł, opłata WPA 242 zł, promesa 17 zł / szt.', 'sudecka-wataha'); ?></li>
                </ul>
            </article>
            <article class="sw-roadmap-summary__card sw-roadmap-summary__card--kolekcja">
                <h4><?php esc_html_e('Pozwolenie kolekcjonerskie', 'sudecka-wataha'); ?></h4>
                <ul>
                    <li><?php esc_html_e('Czas: zwykle ok. 2–5 miesięcy', 'sudecka-wataha'); ?></li>
                    <li><?php esc_html_e('Egzamin: WPA teoria + praktyka (ok. 1150 zł)', 'sudecka-wataha'); ?></li>
                    <li><?php esc_html_e('Koszty kluczowe: badania lek. i psych. 500–700 zł, opłata WPA 242 zł, promesa 17 zł / szt.', 'sudecka-wataha'); ?></li>
                </ul>
            </article>
        </div>
        <p class="sw-roadmap-summary__note"><?php esc_html_e('Podane koszty i czasy są orientacyjne i mogą się zmieniać zależnie od terminu, regionu i aktualnych opłat.', 'sudecka-wataha'); ?></p>
    </section>

    <section class="sw-section sw-section--table">
        <details class="sw-accordion sw-accordion--section" open>
            <summary class="sw-accordion__trigger">
                <span class="sw-accordion__title"><?php esc_html_e('Które pozwolenie na broń jest dla mnie?', 'sudecka-wataha'); ?></span>
            </summary>
            <div class="sw-accordion__body">
                <div class="sw-compare">
                    <div class="sw-compare__col sw-compare__col--sport">
                        <h4 class="sw-compare__heading"><?php esc_html_e('Cel sportowy', 'sudecka-wataha'); ?></h4>
                        <ul>
                            <li><?php esc_html_e('posiadać broń palną', 'sudecka-wataha'); ?></li>
                            <li><?php esc_html_e('móc strzelać z niej na strzelnicy', 'sudecka-wataha'); ?></li>
                            <li><?php esc_html_e('móc kupować do niej amunicję', 'sudecka-wataha'); ?></li>
                            <li><?php esc_html_e('należeć do klubu sportowego', 'sudecka-wataha'); ?></li>
                            <li><?php esc_html_e('zdobyć patent i licencję strzelecką', 'sudecka-wataha'); ?></li>
                            <li><?php esc_html_e('startować w zawodach strzeleckich i ponosić koszty startów', 'sudecka-wataha'); ?></li>
                            <li><?php esc_html_e('odnawiać co roku licencję PZSS', 'sudecka-wataha'); ?></li>
                            <li><?php esc_html_e('nieść przy sobie załadowaną broń', 'sudecka-wataha'); ?></li>
                            <li><?php esc_html_e('użyczać broń', 'sudecka-wataha'); ?></li>
                        </ul>
                        <p class="sw-emphasis"><?php esc_html_e('→ Pozwolenie na broń do celów sportowych jest dla Ciebie.', 'sudecka-wataha'); ?></p>
                    </div>
                    <div class="sw-compare__col sw-compare__col--kolekcja">
                        <h4 class="sw-compare__heading"><?php esc_html_e('Cel kolekcjonerski', 'sudecka-wataha'); ?></h4>
                        <ul>
                            <li><?php esc_html_e('posiadać broń palną', 'sudecka-wataha'); ?></li>
                            <li><?php esc_html_e('móc strzelać z niej na strzelnicy', 'sudecka-wataha'); ?></li>
                            <li><?php esc_html_e('móc kupować do niej amunicję', 'sudecka-wataha'); ?></li>
                            <li><?php esc_html_e('posiadać kolekcję broni (dozwolone są wszystkie przewidziane ustawą rodzaje broni cywilnej, karabinki, pistolety i strzelby)', 'sudecka-wataha'); ?></li>
                        </ul>
                        <p class="sw-muted"><?php esc_html_e('Nie czujesz jednak potrzeby: uczestniczenia w zawodach sportowych, corocznego odnawiania licencji, przenoszenia broni z podpiętym magazynkiem, użyczania broni.', 'sudecka-wataha'); ?></p>
                        <p class="sw-emphasis"><?php esc_html_e('→ Pozwolenie na broń do celów kolekcjonerskich jest dla Ciebie.', 'sudecka-wataha'); ?></p>
                    </div>
                </div>
            </div>
        </details>
    </section>

    <figure class="sw-media sw-media--square" aria-label="<?php esc_attr_e('Miejsce na zdjęcie', 'sudecka-wataha'); ?>">
        <div class="sw-media__frame">
            <span class="sw-media__glyph" aria-hidden="true"></span>
            <span class="sw-media__hint"><?php esc_html_e('Infografika / zdjęcie', 'sudecka-wataha'); ?></span>
            <span class="sw-media__sub"><?php esc_html_e(' np. zestawienie dwóch ścieżek w jednym kadrze.', 'sudecka-wataha'); ?></span>
        </div>
    </figure>

    <section class="sw-section sw-section--permit-filter" data-permit-toggle>
        <h2><?php esc_html_e('Wybierz ścieżkę i czytaj tylko to, co potrzebne', 'sudecka-wataha'); ?></h2>
        <p><?php esc_html_e('Kliknij odpowiedni przycisk, aby wyświetlić szczegółowe kroki tylko dla wybranego celu pozwolenia.', 'sudecka-wataha'); ?></p>
        <div class="sw-permit-toggle" role="tablist" aria-label="<?php esc_attr_e('Wybór ścieżki pozwolenia', 'sudecka-wataha'); ?>">
            <button type="button" class="sw-permit-toggle__btn is-active" role="tab" aria-selected="true" aria-controls="pozwolenie-sportowe-details" id="pozwolenie-toggle-sport" data-permit-target="sport">
                <?php esc_html_e('Do celów sportowych', 'sudecka-wataha'); ?>
            </button>
            <button type="button" class="sw-permit-toggle__btn" role="tab" aria-selected="false" aria-controls="pozwolenie-kolekcjonerskie-details" id="pozwolenie-toggle-kolekcja" data-permit-target="kolekcja" tabindex="-1">
                <?php esc_html_e('Do celów kolekcjonerskich', 'sudecka-wataha'); ?>
            </button>
        </div>
    </section>

    <section class="sw-section sw-section--accent" id="pozwolenie-sportowe-details" role="tabpanel" aria-labelledby="pozwolenie-toggle-sport" data-permit-panel="sport">
        <h2><?php esc_html_e('Zdecydowałem się na pozwolenie na broń do celów sportowych. Co dalej?', 'sudecka-wataha'); ?></h2>

        <div class="sw-accordion-group">
            <details class="sw-accordion" open>
                <summary class="sw-accordion__trigger">
                    <span class="sw-accordion__step">01</span>
                    <span class="sw-accordion__title"><?php esc_html_e('Członkostwo w klubie strzeleckim', 'sudecka-wataha'); ?></span>
                </summary>
                <div class="sw-accordion__body">
                    <p><?php esc_html_e('Podstawowym warunkiem ubiegania się o pozwolenie na broń do celów sportowych jest członkostwo w klubie strzeleckim, np. takim jak Sudecka Wataha.', 'sudecka-wataha'); ?></p>
                    <p><?php esc_html_e('Aby zostać członkiem naszego klubu należy uzupełnić formularz wpisowy, a następnie uiścić opłaty:', 'sudecka-wataha'); ?></p>
                    <ul>
                        <li><?php esc_html_e('Wpisowe — w tym roku wynosi ono 250 zł; wpłatę należy dokonać na rachunek bankowy o numerze: PKO Bank Polski 39 1020 5112 0000 7002 0440 5098; w tytule przelewu wpisać: „Wpisowe" oraz podać swoje imię i nazwisko.', 'sudecka-wataha'); ?></li>
                        <li><?php esc_html_e('Opłatę roczną — w tym roku wynosi ona 400 zł. Wpłatę należy dokonać na ten sam rachunek; w tytule przelewu wpisać: „Opłata roczna" oraz podać swoje imię i nazwisko.', 'sudecka-wataha'); ?></li>
                    </ul>
                    <p><?php esc_html_e('Otrzymasz od nas drogą mailową potwierdzenie przyjęcia w szeregi naszej Watahy oraz informacje o najbliższym szkoleniu strzeleckim.', 'sudecka-wataha'); ?></p>
                    <p><?php esc_html_e('Będąc członkiem naszej Watahy będziesz miał okazję spotkać się z osobami, które interesują się sportem strzeleckim. Pokażemy Ci jak bezpiecznie obchodzić się z bronią oraz nauczymy Cię z niej strzelać.', 'sudecka-wataha'); ?></p>
                    <p><?php esc_html_e('Niezależnie od praktycznych umiejętności posługiwania się bronią będziesz musiał zapoznać się z przepisami i ustawodawstwem z tego obszaru. Część z potrzebnych informacji znajdziesz wprost na naszej stronie, zaś na ewentualne pytania z przyjemnością odpowiemy w trakcie naszych szkoleń strzeleckich.', 'sudecka-wataha'); ?></p>
                </div>
            </details>

            <details class="sw-accordion">
                <summary class="sw-accordion__trigger">
                    <span class="sw-accordion__step">02</span>
                    <span class="sw-accordion__title"><?php esc_html_e('Patent strzelecki', 'sudecka-wataha'); ?></span>
                </summary>
                <div class="sw-accordion__body">
                    <p><?php esc_html_e('Kolejnym krokiem jest uzyskanie patentu strzeleckiego. Jest to dokument, który pozwala Ci uprawiać strzelectwo jako dyscyplinę sportową i jest też niezbędny do ubiegania się o licencję zawodniczą. Patent strzelecki jest również dokumentem niezbędnym do otrzymania pozwolenia na broń do celów sportowych.', 'sudecka-wataha'); ?></p>
                    <p><?php esc_html_e('Aby móc ubiegać się o patent strzelecki wymagany jest minimum trzymiesięczny staż w sportowym klubie strzeleckim, takim jak Sudecka Wataha, ukończenie organizowanego przez nasz klub kursu przygotowawczego oraz uzyskanie pozytywnego wyniku na kończącym kurs przygotowawczy egzaminie. Egzamin będzie się składał z dwóch części:', 'sudecka-wataha'); ?></p>
                    <p><?php esc_html_e('a) Część teoretyczna będzie obejmować sprawdzenie wiedzy z zakresu przepisów takich jak: Ustawa o broni i amunicji; Rozporządzenie dotyczące przechowywania i transportu broni; przepisy Kodeksu Karnego dotyczące broni palnej; przepisy dotyczące dyscyplin sportowych PZSS; zasad bezpieczeństwa; budowy i zasady działania broni.', 'sudecka-wataha'); ?></p>
                    <p><?php esc_html_e('b) Część praktyczna będzie obejmować sprawdzenie umiejętności z zakresu bezpieczeństwa i posługiwania się bronią palną.', 'sudecka-wataha'); ?></p>
                    <p class="sw-muted"><?php esc_html_e('Uwaga: aktualne wymogi stażu i procedury PZSS mogą się różnić — na stronie „Patent strzelecki" zamieszczono bieżącą procedurę zgodną z wytycznymi związku.', 'sudecka-wataha'); ?></p>
                </div>
            </details>

            <details class="sw-accordion">
                <summary class="sw-accordion__trigger">
                    <span class="sw-accordion__step">03</span>
                    <span class="sw-accordion__title"><?php esc_html_e('Licencja zawodnicza', 'sudecka-wataha'); ?></span>
                </summary>
                <div class="sw-accordion__body">
                    <p><?php esc_html_e('Następnym krokiem jest pozyskanie licencji strzeleckiej, w czym chętnie Ci pomożemy. Musisz jedynie przesłać do nas kopię swojego patentu strzeleckiego, dwa podpisane zdjęcia oraz uiścić na konto PZSS opłatę za wydanie licencji w wysokości ok. 50 zł. Należy pamiętać, iż licencja wydawana jest na dany rok kalendarzowy i aby móc ubiegać się o jej odnowienie należy wziąć udział przynajmniej w 8 zawodach w roku poprzednim (4 starty w dyscyplinie wiodącej oraz po 2 starty w dyscyplinach uzupełniających). Dokument powinieneś otrzymać po kilku tygodniach.', 'sudecka-wataha'); ?></p>
                </div>
            </details>

            <details class="sw-accordion">
                <summary class="sw-accordion__trigger">
                    <span class="sw-accordion__step">04</span>
                    <span class="sw-accordion__title"><?php esc_html_e('Badania i zaświadczenia', 'sudecka-wataha'); ?></span>
                </summary>
                <div class="sw-accordion__body">
                    <p><?php esc_html_e('Zanim złożysz wniosek o pozwolenie na broń, będziesz potrzebował jeszcze zaświadczenia o przynależności do klubu strzeleckiego (otrzymasz je od nas) oraz zaświadczeń od lekarza i psychologa. Koszt badań lekarskich i psychologicznych to około 500–700 zł. Należy pamiętać, że te badania są ważne tylko przez 3 miesiące. Będziesz musiał również uzbierać wymaganą ilość startów w zawodach strzeleckich.', 'sudecka-wataha'); ?></p>
                </div>
            </details>

            <details class="sw-accordion">
                <summary class="sw-accordion__trigger">
                    <span class="sw-accordion__step">05</span>
                    <span class="sw-accordion__title"><?php esc_html_e('Wniosek o pozwolenie na broń', 'sudecka-wataha'); ?></span>
                </summary>
                <div class="sw-accordion__body">
                    <p><?php esc_html_e('We wniosku należy uzasadnić powód, dla którego wnioskujesz o pozwolenie na posiadanie broni. W tym przypadku będzie to przynależność do klubu strzeleckiego oraz konieczność startu w zawodach sportowych. Pomożemy Ci go przygotować w oparciu o nasze dotychczasowe doświadczenia. Komplet dokumentów złóż do lokalnego WPA (Wydział Postępowań Administracyjnych Policji):', 'sudecka-wataha'); ?></p>
                    <ul>
                        <li><?php esc_html_e('wniosek o wydanie pozwolenia na broń do celów sportowych,', 'sudecka-wataha'); ?></li>
                        <li><?php esc_html_e('kopia patentu strzeleckiego (oryginał do wglądu),', 'sudecka-wataha'); ?></li>
                        <li><?php esc_html_e('kopia licencji (oryginał do wglądu),', 'sudecka-wataha'); ?></li>
                        <li><?php esc_html_e('oryginał zaświadczenia o przynależności do klubu strzeleckiego,', 'sudecka-wataha'); ?></li>
                        <li><?php esc_html_e('zaświadczenie lekarskie (lub jego poświadczona kopia),', 'sudecka-wataha'); ?></li>
                        <li><?php esc_html_e('zaświadczenie od psychologa (lub jego poświadczona kopia),', 'sudecka-wataha'); ?></li>
                        <li><?php esc_html_e('potwierdzenie wniesienia opłaty skarbowej w wysokości 242 zł na konto Urzędu Miasta,', 'sudecka-wataha'); ?></li>
                        <li><?php esc_html_e('dwa zdjęcia w formacie 3 cm × 4 cm,', 'sudecka-wataha'); ?></li>
                        <li><?php esc_html_e('wykaz startów w zawodach.', 'sudecka-wataha'); ?></li>
                    </ul>
                    <p><?php esc_html_e('Po pozytywnej weryfikacji, pozwolenie na broń powinieneś uzyskać w przeciągu dwóch miesięcy.', 'sudecka-wataha'); ?></p>
                </div>
            </details>
        </div>
    </section>

    <section class="sw-section" id="pozwolenie-kolekcjonerskie-details" role="tabpanel" aria-labelledby="pozwolenie-toggle-kolekcja" data-permit-panel="kolekcja" hidden>
        <h2><?php esc_html_e('Zdecydowałem się na pozwolenie na broń do celów kolekcjonerskich. Co dalej?', 'sudecka-wataha'); ?></h2>

        <div class="sw-accordion-group">
            <details class="sw-accordion" open>
                <summary class="sw-accordion__trigger">
                    <span class="sw-accordion__step">01</span>
                    <span class="sw-accordion__title"><?php esc_html_e('Członkostwo w klubie kolekcjonerskim', 'sudecka-wataha'); ?></span>
                </summary>
                <div class="sw-accordion__body">
                    <p><?php esc_html_e('Warunkiem niezbędnym do ubiegania się o pozwolenie na broń do celów kolekcjonerskich jest członkostwo w klubie o charakterze kolekcjonerskim, takim jak Sudecka Wataha.', 'sudecka-wataha'); ?></p>
                    <p><?php esc_html_e('Aby zostać członkiem naszego klubu należy uzupełnić formularz wpisowy, a następnie uiścić opłaty:', 'sudecka-wataha'); ?></p>
                    <ul>
                        <li><?php esc_html_e('Wpisowe — w tym roku wynosi ono 250 zł; wpłatę należy dokonać na rachunek: 66 1140 2004 0000 3602 7658 6039; w tytule przelewu wpisać: „Wpisowe" oraz podać swoje imię i nazwisko.', 'sudecka-wataha'); ?></li>
                        <li><?php esc_html_e('Opłatę roczną — w tym roku wynosi ona 400 zł. Wpłatę na ten sam rachunek; w tytule: „Opłata roczna" oraz imię i nazwisko.', 'sudecka-wataha'); ?></li>
                    </ul>
                </div>
            </details>

            <details class="sw-accordion">
                <summary class="sw-accordion__trigger">
                    <span class="sw-accordion__step">02</span>
                    <span class="sw-accordion__title"><?php esc_html_e('Nauka przepisów i obsługi broni', 'sudecka-wataha'); ?></span>
                </summary>
                <div class="sw-accordion__body">
                    <p><?php esc_html_e('Skorzystaj z materiałów dostępnych na naszej stronie oraz linków do rozporządzeń i ustaw obowiązujących strzelców na terytorium Rzeczpospolitej Polskiej. Na organizowanych przez nas szkoleniach strzeleckich pomożemy Ci również zapoznać się z różnymi rodzajami broni oraz z zasadami bezpiecznego posługiwania się nimi (odbezpieczanie i zabezpieczanie, ładowanie i rozładowywanie, rozkładanie i składanie, usuwanie zacięć itp.).', 'sudecka-wataha'); ?></p>
                </div>
            </details>

            <details class="sw-accordion">
                <summary class="sw-accordion__trigger">
                    <span class="sw-accordion__step">03</span>
                    <span class="sw-accordion__title"><?php esc_html_e('Egzamin przed policją', 'sudecka-wataha'); ?></span>
                </summary>
                <div class="sw-accordion__body">
                    <p><?php esc_html_e('Kiedy uznasz, że jesteś gotowy, możesz przystąpić do egzaminu. Egzamin składa się z dwóch części: teoretycznej i praktycznej.', 'sudecka-wataha'); ?></p>
                    <p><?php esc_html_e('Część teoretyczna obejmuje m.in.: Ustawę o broni i amunicji; rozporządzenie dotyczące przechowywania i transportu broni; przepisy Kodeksu Karnego dotyczące broni palnej; zasady bezpieczeństwa; budowę i zasady działania broni.', 'sudecka-wataha'); ?></p>
                    <p><?php esc_html_e('Część praktyczna skupia się na sprawdzeniu prawidłowego posługiwania się bronią oraz umiejętności strzeleckich. Należy pamiętać, że największy nacisk kładziony jest na bezpieczeństwo. Celność ma znaczenie drugorzędne.', 'sudecka-wataha'); ?></p>
                    <p><?php esc_html_e('Koszt przystąpienia do egzaminu wynosi 1150 zł i jest to jeden z większych kosztów związanych z pozwoleniem na broń do celów kolekcjonerskich.', 'sudecka-wataha'); ?></p>
                </div>
            </details>

            <details class="sw-accordion">
                <summary class="sw-accordion__trigger">
                    <span class="sw-accordion__step">04</span>
                    <span class="sw-accordion__title"><?php esc_html_e('Badania i zaświadczenia', 'sudecka-wataha'); ?></span>
                </summary>
                <div class="sw-accordion__body">
                    <p><?php esc_html_e('Zanim złożysz wniosek o pozwolenie na broń, będziesz potrzebował zaświadczenia o przynależności do klubu o charakterze kolekcjonerskim (otrzymasz je od nas) oraz zaświadczeń od lekarza i psychologa. Koszt badań lekarskich i psychologicznych to około 500–700 zł. Badania ważne są ok. 3 miesiące.', 'sudecka-wataha'); ?></p>
                </div>
            </details>

            <details class="sw-accordion">
                <summary class="sw-accordion__trigger">
                    <span class="sw-accordion__step">05</span>
                    <span class="sw-accordion__title"><?php esc_html_e('Wniosek o pozwolenie na broń', 'sudecka-wataha'); ?></span>
                </summary>
                <div class="sw-accordion__body">
                    <p><?php esc_html_e('We wniosku uzasadnij przynależność do klubu o charakterze kolekcjonerskim. Komplet dokumentów złóż do lokalnego WPA:', 'sudecka-wataha'); ?></p>
                    <ul>
                        <li><?php esc_html_e('wniosek o wydanie pozwolenia na broń do celów kolekcjonerskich,', 'sudecka-wataha'); ?></li>
                        <li><?php esc_html_e('oryginał zaświadczenia o przynależności do klubu o charakterze kolekcjonerskim,', 'sudecka-wataha'); ?></li>
                        <li><?php esc_html_e('zaświadczenie lekarskie (lub poświadczona kopia),', 'sudecka-wataha'); ?></li>
                        <li><?php esc_html_e('zaświadczenie od psychologa (lub poświadczona kopia),', 'sudecka-wataha'); ?></li>
                        <li><?php esc_html_e('potwierdzenie opłaty skarbowej 242 zł,', 'sudecka-wataha'); ?></li>
                        <li><?php esc_html_e('dwa zdjęcia 3 cm × 4 cm.', 'sudecka-wataha'); ?></li>
                    </ul>
                    <p><?php esc_html_e('Po pozytywnej weryfikacji, pozwolenie powinieneś uzyskać w 1–2 miesiące. W międzyczasie dzielnicowy może przeprowadzić wywiad środowiskowy.', 'sudecka-wataha'); ?></p>
                </div>
            </details>
        </div>
    </section>

    <section class="sw-section sw-section--accent">
        <details class="sw-accordion sw-accordion--section">
            <summary class="sw-accordion__trigger">
                <span class="sw-accordion__title"><?php esc_html_e('Porównanie obu ścieżek', 'sudecka-wataha'); ?></span>
            </summary>
            <div class="sw-accordion__body">
                <p>
                    <?php esc_html_e('Porównanie obu ścieżek w przejrzysty sposób przedstawia infografika', 'sudecka-wataha'); ?>
                    <a href="<?php echo esc_url($fia_info); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Stowarzyszenia FIA', 'sudecka-wataha'); ?></a>.
                </p>
            </div>
        </details>
    </section>

    <section class="sw-section">
        <details class="sw-accordion sw-accordion--section" open>
            <summary class="sw-accordion__trigger">
                <span class="sw-accordion__title"><?php esc_html_e('Ważne linki i materiały', 'sudecka-wataha'); ?></span>
            </summary>
            <div class="sw-accordion__body">
                <ul>
                    <li><a href="<?php echo esc_url($nts_przepisy); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Komplet przepisów o broni palnej (NTS)', 'sudecka-wataha'); ?></a></li>
                    <li><a href="<?php echo esc_url($nts_egzamin); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Opis egzaminu na pozwolenie kolekcjonerskie (NTS)', 'sudecka-wataha'); ?></a></li>
                </ul>
            </div>
        </details>
    </section>
</article>
