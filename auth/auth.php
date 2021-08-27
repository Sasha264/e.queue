<?php
$name = ($_POST["name"]);//получаем имя из файла login.php
$passwd = md5(($_POST["pass"]));
include 'safemysql.class.php';
include "db.php";//выбрать врачей у которых совпадает имя и md5 пароля
$result=$db->getAll ("SELECT * FROM `users` WHERE name='$name' AND pass='$passwd'");
$role = $result[0]['role'];//определяем специализацию врача
if ($result[0]['name']) {//если врач найден то записываем cookie с ролью врача
  setcookie('target', $role, time()+99600,"/");
  header("refresh: 3; url=../doctor.php");
echo "Добро пожаловать $name";

}
else {//если врач не найден то сообщаем об этом
echo "Неверный логин или пароль";
}

?>
