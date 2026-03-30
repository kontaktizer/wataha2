#!/bin/sh
# Odbudowuje HTML z motywu (sudecka-wataha/) i uruchamia podgląd w przeglądarce.
cd "$(dirname "$0")" || exit 1
cp ../sudecka-wataha/assets/css/theme.css ./assets/css/
cp ../sudecka-wataha/assets/js/theme.js ./assets/js/
python3 build.py
echo ""
echo "Podgląd: http://localhost:8765/"
echo "Zatrzymanie: Ctrl+C"
exec python3 -m http.server 8765
