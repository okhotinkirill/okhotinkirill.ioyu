<?php 
setcookie('user', $user ['login'], time() + 3600*24*30*12, "/");

//переадресация на главную если пользователь авторизован
header('Location: /');
?>