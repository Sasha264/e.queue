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
  <nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>          <li class="nav-item">
                  <a  aria-current="page" href="/auth/reg.php">Регистрация Врача</a>
                </li>
                <li class="nav-item">
                  <a  aria-current="page" href="/auth/login.php">Авторизация Врача</a>
                </li>
                <li class="nav-item">
                  <a  aria-current="page" href="/auth/logout.php">Завершить Приём</a>
                </li>
                <li class="nav-item">
                  <a aria-current="page" href="doctor.php">Страница врача</a>
                </li>
    </div>
    <br>
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="bg-dark p-4">
        <h5 class="text-white h4">Инструкция по использованию</h5>
        <span class="text-muted">Электронная очередь для мед. учереждения.
        Авторизуйтесь под именем врача.<br>"Настя", "Вадим", "Алексей" С паролем "111"
      И начните приём</span>
      </div>
    </div>
  </nav>
  <div class="container">
    <br>
    <form action="record.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" </label>
    <input type="text" name="name" placeholder="Введите имя" class="form-control" >
  </div>

    <div class="d-grid gap-2">
    <button type="submit" name="button" value="1" class="btn btn-dark" type="button">Консультация</button>
  </div>
<br>
      <div class="d-grid gap-2">
      <button type="submit" name="button" value="2" class="btn btn-dark" type="button">Прививка</button>
    </div>
<br>
        <div class="d-grid gap-2">
        <button type="submit" name="button" value="3" class="btn btn-dark" type="button">Терапевт</button>
      </div>
</form>
<table class="table">
  <thead>
    <tr>
      <th scope="col">№</th>
      <th scope="col">Имя</th>
      <th scope="col">Направление</th>
      <th scope="col">Статус</th>
    </tr>
  </thead>
<?php
include 'tabl.php';//Подключаем таблицу ожтдание
?>

</table>
</div>

</body>
</html>
