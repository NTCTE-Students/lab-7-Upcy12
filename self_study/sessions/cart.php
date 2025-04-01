<?php

session_start();
PRINT("Your cart: ");
print($_SESSION['cart']);

if (isset($_SESSION['cart'])){
}else{
    // header('Location: 4.php');
}