@echo off
cd /d "%~dp0"
git add .
git commit -m "Auto-save: %date% %time%"
git push
pause
