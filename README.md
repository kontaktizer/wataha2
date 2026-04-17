# Sudecka Wataha - WordPress Theme Repo

To repozytorium zawiera motyw WordPress `wataha2` oraz pliki podgladowe z katalogu `preview`.

## Wazne dla WP Pusher

- Motyw znajduje sie w podkatalogu `wataha2`.
- W ustawieniach WP Pusher ustaw `Repository subdirectory` na `wataha2`.
- Zbudowany plik CSS `wataha2/assets/css/theme.css` jest wersjonowany, aby motyw dzialal od razu po instalacji z GitHub.

## Lokalny build CSS (opcjonalnie)

```bash
cd wataha2
npm install
npm run build
```

## Przed kolejnym deployem

- Zaktualizuj pliki z `src/css` oraz szablony PHP.
- Uruchom `npm run build` w `wataha2`.
- Zacommituj zmiany, aby WP Pusher mial aktualna paczke.
