@echo off
cd C:\xampp\htdocs\hrms
C:\xampp\php\php.exe artisan schedule:run >> scheduler-log.txt
echo %date% %time% >> scheduler-log.txt