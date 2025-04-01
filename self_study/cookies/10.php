<?php

setcookie("session_id","12112006", time() +3600,"/");

print('Куки до удаления:' . $_COOKIE['session_id'] . '<br>');

unset($_COOKIE['session_id']);
// setcookie('session_id','', time() + -1,'/');

print('куки после удаления:' . $_COOKIE['session_id'] . '<br>');
