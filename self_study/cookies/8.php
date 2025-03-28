<?php

setcookie("font_size","10px", time() +5,"/");
setcookie("color","red", time() + 5,"/");
setcookie("width","50%", time() + 5,"/");

print("У данного тега несколько свойств: font_size(" . ($_COOKIE['font_size'] ?? 'Неизвестно'). '), color(' . ($_COOKIE['color'] ?? 'Неизвестно'). '), width(' . ($_COOKIE['width'] ?? 'Неизвестно'). ')');