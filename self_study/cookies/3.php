<?php

$cookies_name = 'preferences';
$cookies_value = 'dark_mode';

setcookie($cookies_name, $cookies_value, time() + 604800,'/');

if (!isset($_COOKIE[$cookies_name])) {
    print("Куки с названием '{$cookies_name}' не существует!<br>");
}else{
    print("Кука с названием '{$cookies_name}' существует!");
    print("И ее значение: " . $_COOKIE[$cookies_name]);
}