<?php
require_once 'settings.php';
//получаем имя команды и помещаем в новую переменную
$name_1=$_GET['name'];

//подключение к mysql
$link = mysqli_connect($host, $user, $pass, $data);
//удаляем по запросу данную команду
$sql = mysqli_query($link, "DELETE FROM Команда WHERE `Команда`.`Название` = '$name_1'");

//перенаправление обратно на главную страницу
header('Location:http://mysite/teamnavigaciya.php');
//header('Location:/');

?>