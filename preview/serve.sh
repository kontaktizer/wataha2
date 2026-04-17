#!/bin/sh
# Odbudowuje HTML z motywu (wataha2/) i uruchamia podglad w przegladarce.
cd "$(dirname "$0")" || exit 1
cp ../wataha2/assets/css/theme.css ./assets/css/
cp ../wataha2/assets/js/theme.js ./assets/js/
python3 build.py
echo ""
echo "Podgląd: http://localhost:8765/"
echo "Zatrzymanie: Ctrl+C"
exec python3 -m http.server 8765
