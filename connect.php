<?php
$host="localhost"; /*хост*/
$user="admin"; /*Имя пользователя*/
$password="12345"; /*Пароль пользователя*/
$db="baseName"; /*Название базы данных*/

mysql_connect($host, $user, $password)or die("MySQL сервер недоступен!".mysql_error()); /*Подключение к серверу*/
mysql_select_db($db) or die("Нет соединения с БД".mysql_error()); /*Подключение к базе данных на сервере*/
?>
