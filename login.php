<?php

session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $username = $_POST['username'];
    $_SESSION['username'] = $username;

    header('Location: welcome.php');
    // print('lol');
    exit();
}
// echo'lol';
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <h2>Форма входа</h2>
    <form method="post">
        Имя пользователя: <input type="text" name="username" required><br><br>
        <input type="submit" value="Войти">
    </form>
</body>
</html>