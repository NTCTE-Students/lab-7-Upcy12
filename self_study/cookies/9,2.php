<?php

if (isset($_COOKIE['loggedin'])) {
    print('Привествуем вас!');
}else{
    print('Установите куки на спредыдущей странице!');
    // header('Location: 9,1.php');
    // exit();
}