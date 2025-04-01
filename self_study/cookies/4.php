<?php

$cookies_name = 'language';
$cookies_value = 'English';

setcookie($cookies_name, $cookies_value, time() + 7200, '/');

if (!isset($_COOKIE[$cookies_name])) {
    print("Куки с именем '{$cookies_name}' не существует!");
}else{
    print("кука с именем '{$cookies_name}' существует!<br>");
    print("Ее значение: " . $_COOKIE[$cookies_name]);
}