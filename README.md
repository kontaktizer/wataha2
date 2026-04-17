# Sudecka Wataha - WordPress Theme Repo

To repozytorium zawiera motyw WordPress `sudecka-wataha` oraz pliki podgladowe z katalogu `preview`.

## Wazne dla WP Pusher

- Motyw znajduje sie w podkatalogu `sudecka-wataha`.
- W ustawieniach WP Pusher ustaw `Repository subdirectory` na `sudecka-wataha`.
- Zbudowany plik CSS `sudecka-wataha/assets/css/theme.css` jest wersjonowany, aby motyw dzialal od razu po instalacji z GitHub.

## Lokalny build CSS (opcjonalnie)

```bash
cd sudecka-wataha
npm install
npm run build
```

## Przed kolejnym deployem

- Zaktualizuj pliki z `src/css` oraz szablony PHP.
- Uruchom `npm run build` w `sudecka-wataha`.
- Zacommituj zmiany, aby WP Pusher mial aktualna paczke.
