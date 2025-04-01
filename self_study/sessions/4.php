<?php

session_start();

if (!isset($_SESSION["cart"])){
    $cart = [];
}else{
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        array_push($_SESSION['cart'], $_POST['title']);
        foreach($cart as $objects){
            print($objects);
        }
        // header('Location: cart.php');
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<body>
    <form action="4.php" method="post">
        Название товара: <input type="text" name="title">
        <input type="submit" value="Добавить товар">
    </form>
</body>
</html>