<?php
require_once 'settings.php';
//подключение к mysql
$link = mysqli_connect($host, $user, $pass, $data);
//добавляем команду
$sql = mysqli_query($link, "INSERT INTO `Команда` (`Название`, `Город`, `Дата_основания`, `Президент`, `Количество_фанатов`, `Стадион`) VALUES ('{$_POST['name']}', '{$_POST['country']}', '{$_POST['date']}', '{$_POST['prezident']}', '{$_POST['Fans']}', '{$_POST['stadium']}')");

//перенаправление обратно на главную страницу
header('Location:http://mysite/teamnavigaciya.php');
//header('Location:/');

?>