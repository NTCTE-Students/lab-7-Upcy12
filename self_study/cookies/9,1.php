<?php

setcookie("loggedin",true, time() +5,"/");
print($_COOKIE['loggedin']);

if($_SERVER['REQUEST_METHOD'] == 'post'){
    header('Location: 9,2.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<body>
    <form action="9,1.php" method="POST">
    <input type="submit" value="Перейти c измененной кукой 'loggedin'">
    </form>
</body>
</html>