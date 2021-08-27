<?php
//Параметры соединения
$user = 'root';
$pwd = 'root';
$db = 'db';

// Соединение с БД MySQL
$db = new SafeMysql(array('user' => $user, 'pass' => $pwd,'db' => $db, 'charset' => 'utf8'));
$gmt = -10800;
?>
