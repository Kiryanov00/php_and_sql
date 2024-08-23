<?php
require_once 'settings.php';

//подключение к mysql
$link = mysqli_connect($host, $user, $pass, $data);
//изменяем команду
$sql = mysqli_query($link, "UPDATE `Команда` SET `Название` = '{$_POST['name']}', `Город` = '{$_POST['country']}', `Дата_основания` = '{$_POST['date']}', `Президент` = '{$_POST['prezident']}', `Количество_фанатов` = '{$_POST['Fans']}', `Стадион` = '{$_POST['stadium']}' WHERE `Команда`.`id` = {$_POST['id']}");

if (!$sql) die('Error2');

header('Location:http://mysite/teamnavigaciya.php');
//перенаправление обратно на главную страницу
//header('Location:/');

?>