<?php

session_start();

if (!isset($_SESSION['username'])){
    $username = 'student';

    $_SESSION['username'] = $username;
}

print($_SESSION['username']);

?>