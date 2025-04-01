<?php

$cookie_name = 'country';
$cookie_value = 'Russia';

setcookie('country', 'Russia', time() + 5, '/');

print("Hello from " . ($_COOKIE['country'] ?? 'не установлено'));