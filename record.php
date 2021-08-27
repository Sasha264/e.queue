<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Электронная Очередь</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body class="p-3 mb-2 bg-secondary text-white">
<?php
include 'safemysql.class.php';
include 'db.php';
//получаем имя и цель визита
$target = $_POST['button'];
$name = $_POST["name"];
if (strlen($name)<3) {//если имя меньше 3 символов то не принимаем имя

?>

  <div class="container">
<div class="d-grid gap-2">
<a href="/" class="btn btn-primary btn-lg " >Введите Имя</a>
<br>
<?php
}
else {//если имя больше 3, то
//добовляем в таблицу пацента со статусом 2-ожидание
  $request = $db->getAll("INSERT INTO `record`( `name`, `target`,status) VALUES ('$name','$target','2')");

  ?>

    <div class="container">
  <div class="d-grid gap-2">
  <a href="/" class="btn btn-success btn-lg " >Ожидайте ответа</a>
  <br>
  <?php
}






 ?>
