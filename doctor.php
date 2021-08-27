<?php
$target=$_COOKIE['target'];
 if ($target==NULL) {
header("refresh: 3; url=/auth/login.php");
   echo "Авторизуйтесь пж";
}
else {

 ?>
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

  <div class="container">

    <form action="doctorAction.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" </label>
    <input type="text" name="name" placeholder="Введите имя" class="form-control" >
  </div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">№</th>
      <th scope="col">Имя</th>
      <th scope="col">Время регистрации</th>
      <th scope="col">Статус</th>
        <th scope="col">Действие</th>
    </tr>
  </thead>

<?php
// var_dump($_COOKIE);
$target=$_COOKIE['target'];

include 'safemysql.class.php';
include 'db.php';

//запросить всех ожидающих, приём которых ещё не окончен и  цель визита которых
//данный врач
$result=$db->getAll("SELECT * FROM `record` WHERE status>0 AND target='$target'");

foreach ($result as $key => $value) {//перебираем ожидающих
?>
  <tbody>
    <tr>
      <th scope="row"><? echo $value [id];?></th>
      <td><? echo $value [name];?></td>
      <td><? echo $value [time];?></td>
      <td><? echo $value [status];?></td>
    <td>  <div class="d-grid gap-2">
      <button type="submit" name="button" value="<? echo $value [id];?>" class="btn btn-dark" type="button">Принять/Завершить</button>
    </div>
  </td>
    </tr>
  </tbody>
  <?php
  }
  ?>
</table>
</div>
</form>
</body>
</html>
<?php
}
?>
