<?php
require_once 'settings.php';
//подключение к mysql
$connection= new mysqli($host, $user, $pass, $data);
if ($connection->connect_error) die('Error');

//запрос данных
$query= "SELECT * FROM стадион";
$result=$connection->query($query);

if (!$result) die('Error');
?>


<!DOCTYPE html>
<html lang="en">
<!-- ctrl + / (команда для комментария)-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="C:\OSPanel\domains\mysite\styles\mycss.css">
    <title>Чтение данных</title>
</head>
<style>
    th,td{
        padding: 10px;
    }
    th {background: #606060;}
    td {background: #b5b5b5;}    
</style>
<body>

<header><!-- Это навигационная модель-->
        <nav class="navbar navbar-expand-lg bg-success">
            <!-- <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>-->
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="teamnavigaciya.php">Команда</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="stadiumnavigaciya.php">Стадион</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                  </li>
                </ul><!-- Маркированный список-->
              </div>
            </div>
          </nav>
<!--<h1>
    Привет!
</h1>-->
</header>
<p></p>
<table>
    <tr>
        <th>Name</th>
        <th>Adress</th>
        <th>Count</th>
        <th>Date</th>
    </tr>
    <?php
    //передадим данные в rows, чтобы вывести на страницу
    $rows=$result->num_rows;
    for($i=0; $i< $rows; ++$i ){
       $result->data_seek($i);
       $row=$result->fetch_row();?>
       <tr>
          <td><?printf("%s",$row[0]);?></td>
          <td><?printf("%s",$row[1]);?></td>
          <td><?printf("%s",$row[2]);?></td>
          <td><?printf("%s",$row[3]);?></td>
        </tr>
 
    <?php
    }
    ?>
    </table>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>


