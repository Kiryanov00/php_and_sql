<?php
require_once 'settings.php';

$name_1=$_GET['name'];

$connection= new mysqli($host, $user, $pass, $data);
if ($connection->connect_error) die('Error');

$query= "SELECT * FROM `Команда` WHERE Название='$name_1'";
$result=$connection->query($query);

if (!$result) die('Error2');

$result->data_seek(0);
$row=$result->fetch_row();
//print_r($_GET);
//print_r($result);
?>

<!DOCTYPE html>
<html lang="en">
<!-- ctrl + / (команда для комментария)-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изменение</title>
</head>
<body>
<h1> Изменить команду</h1>
<!-- переход на страницу -->
<Form action="update2.php" method="post">
    <input type="hidden" name="id" value="<?printf("%s",$row[6]);?>">
    <p>Name</p>
    <input type="text" name="name" value="<?printf("%s",$row[0]);?>">
    <p>Country</p>
    <input type="text" name="country"value="<?printf("%s",$row[1]);?>">
    <p>Date</p>
    <input type="date" name="date"value="<?printf("%s",$row[2]);?>">
    <p>Prezident</p>
    <input type="text" name="prezident"value="<?printf("%s",$row[3]);?>">
    <p>Fans</p>
    <input type="number" name="Fans"value="<?printf("%s",$row[4]);?>">
    <p>stadium</p>
    <input type="text" name="stadium"value="<?printf("%s",$row[5]);?>">
    <p></p>
    <button type="submit">Изменить команду</button>
    <p></p>
</Form>
</body>
</html>