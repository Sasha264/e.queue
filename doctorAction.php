<?php
include 'safemysql.class.php';
include 'db.php';
$id = $_POST["button"];//получаем значение id пациента
//меняем статус, вычитаем из существующего 1, у выбранного пациента
$result=$db->getAll("UPDATE `record` SET `status`=status-1 WHERE id='$id'" );
header("Location: /doctor.php");
















 ?>
