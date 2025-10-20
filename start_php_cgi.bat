@echo off
set PHP_PATH=D:\nPHP
set PHP_INI=%PHP_PATH%\php.ini
cd D:\nPHP\php8
rem -c php.ini
start "PHP-CGI-9001" php-cgi.exe -b 127.0.0.1:9001 -c "%PHP_INI%"
start "PHP-CGI-9002" php-cgi.exe -b 127.0.0.1:9002 -c "%PHP_INI%"
start "PHP-CGI-9003" php-cgi.exe -b 127.0.0.1:9003 -c "%PHP_INI%"
start "PHP-CGI-9004" php-cgi.exe -b 127.0.0.1:9004 -c "%PHP_INI%"
echo PHP-CGI processes started on ports 9001-9004