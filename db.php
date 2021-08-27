<?php
//Параметры соединения
$user = 'root';
$pass = 'root';
$db = 'db';

// Соединение с БД MySQL
$db = new SafeMysql(array('user' => $user, 'pass' => $pass,'db' => $db, 'charset' => 'utf8'));
$gmt = -10800;
?>
