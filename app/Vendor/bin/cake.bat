@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../cakephp/cakephp/lib/Cake/Console/
::bash "%BIN_TARGET%" %*
php -q "%BIN_TARGET%cake.php" -working "%CD% " %*
echo.

exit /B %ERRORLEVEL%