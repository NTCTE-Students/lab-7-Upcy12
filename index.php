<?php

$cookie_name = "username";
$cookie_value = "John Doe";

setcookie($cookie_name, $cookie_value, time() + 5, '/');


?>
<!DOCTYPE html>
<html lang="en">
<body>
    <?php
        if (!isset($_COOKIE[$cookie_name])) {
            print("Куки '{$cookie_name}' не установлены!");
        } else {
            print("Куки '{$cookie_name}' установлены!");
                print("Значение: " . $_COOKIE[$cookie_name]);
        }
    ?>
</body>
</html>