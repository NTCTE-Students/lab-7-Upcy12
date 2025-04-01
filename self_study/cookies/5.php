<?php

$cookies_name = 'visited';
$cookies_value = 0;

setcookie($cookies_name, $cookies_value, time() + 3600, '/');

$_COOKIE[$cookies_name] ++;
setcookie($cookies_name, $_COOKIE[$cookies_name], time() + 3600,'/');

print("Вы посещали страницу " . $_COOKIE[$cookies_name] . 'раз');