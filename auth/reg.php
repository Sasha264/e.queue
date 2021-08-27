<!DOCTYPE html>
<html lang="ru">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Регистрация</title>
</head>
<body class="p-3 mb-2 bg-secondary text-white">
  <form method="post" action="reg.php">
    <p><b>Имя</b><br>
     <input type="text" name="name" value="">
     <p><b>Пароль</b><br>
      <input type="password" name="pass" value="" >

    </p>
    <div class="dropdown">
      <button class="btn btn-inf dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        Кабинет
      </button>


      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><button class="btn btn-secondary btn-lg" name="role" value='1' type="submit">
Процедурный
  </button></li>
        <li><button class="btn btn-secondary btn-lg" name="role" value='2' type="submit">
Терапевт
  </button></li>
        <li><button class="btn btn-secondary btn-lg" name="role" value='3' type="submit">
Регистратура
  </button></li>
      </ul>
    </div>

   </form>
<?php
error_reporting(0);
include 'safemysql.class.php';
include "db.php";
//получаем данные из формы выше
$role= ($_POST["role"]);
$name = ($_POST["name"]);
$pass = md5(($_POST["pass"]));
if ($name !="" && $_POST["pass"] != "") {//если имя не пустое и пароль не пустой, то
//создаёт учётную запись врача в таблице users
 $db->getAll("INSERT INTO `users`( `name`, `pass`,`role`) VALUES ('$name','$pass','$role')");
}
else {//в противном случае просим ввести данные
  echo "Введите данные";

}
