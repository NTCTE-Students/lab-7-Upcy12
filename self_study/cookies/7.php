<?php

setcookie("theme","light", time() + 3600,"/");

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_COOKIE['theme'] == 'light'){
        setcookie('theme','dark', time() + 3600,'/');
    }else{
        setcookie('theme','light', time() + 3600,'/');
    }
}
print("Текущая тема: " . $_COOKIE['theme']);

?>

<!DOCTYPE html>
<html lang="en">
<body>
    <form action="7.php" method="post">
        <input type="submit" value="light/dark">
    </form>
</body>
</html>