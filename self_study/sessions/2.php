<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    header('Location: 3.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<body>
    <form action="2.php" method="post">
        имя: <input type="text" name="username">
        пароль: <input type="text" name="password">
        <input type="submit" value="Сохранить">
    </form>
</body>
</html>