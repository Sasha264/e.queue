<?php

include 'safemysql.class.php';
include 'db.php';
//запросить всех ожидающих, приём которых ещё не окончен и отсортировать по айди
//по убыванию
$result=$db->getAll("SELECT * FROM record WHERE status>0 ORDER BY id DESC");
foreach ($result as $key => $value) { //перебираем ожидающих
  $target=$value[target];
$status=$value[status];
switch ($target) {//преобразуем индексы в названия
  case '1':
$cab="Консультация";
    break;
    case '2':
  $cab="Прививка";
      break;
      case '3':
    $cab="Терапевт";
        break;
}
switch ($status) {//преобразуем индексы в статусы
  case '1':
$st="На приёме";
    break;
    case '2':
  $st="Ожидает";
      break;

}

?>


  <tbody>

    <tr>
      <th scope="row"><? echo $value [id];?></th>
      <td><? echo $value [name];?></td>
      <td><? echo $cab;?></td>
      <td> <? echo $st;?></td>
    </tr>
  </tbody>
  <?php
  }
  ?>
