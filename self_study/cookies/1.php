<?php

$cookies_name = "user";
$cookies_value = "admin";

setcookie($cookies_name, $cookies_value, time() + 86400, '/') ;

?>

<!DOCTYPE html>
<html lang="en">
<body>
    <?php
        if (!isset($_COOKIE[$cookies_name])) {
            echo "Куки '{$cookies_name}' не установлены!";
        }else{
            echo "Куки '{$cookies_name}' установлены!<br>";
                echo'Значение: ' . $_COOKIE[ $cookies_name ];
        }
    ?>
</body>
</html>