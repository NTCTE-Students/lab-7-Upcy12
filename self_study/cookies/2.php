<?php

$cookies_name = "user";
$cookies_value = "admin";

setcookie($cookies_name, $cookies_value, time() + 86400, '/') ;

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $cookies_value = 'guest';
    setcookie($cookies_name, $cookies_value, time() + 86400, '/');
}


?>

<!DOCTYPE html>
<html lang="en">
<body>
    <form action="2.php" method="post">
        <input type="submit" value=" Изменить куку">
    </form>
    <?php
        if (!isset($_COOKIE[$cookies_name])) {
            echo "Куки '{$cookies_name}' не установлены!";
        }else{
            echo "Куки '{$cookies_name}' установлены!<br>";
                echo"Значение: " . $_COOKIE[ $cookies_name ];
        }
    ?>
</body>
</html>