<html>
<head>
<meta charset="utf-8">
</head>
<body>

<?php

mysql_connect("localhost", "sms", "1111111") //параметры в скобках ("хост", "имя пользователя", "пароль")
or die("<p>Ошибка подключения к базе данных! " . mysql_error() . "</p>");


mysql_select_db("smsd2")//параметр в скобках ("имя базы, с которой соединяемся")
 or die("<p>Ошибка выбора базы данных! ". mysql_error() . "</p>");

$number = trim($_REQUEST['number']);
$text = trim($_REQUEST['text']);
//$reason = trim($_REQUEST['reason']);
//$message = trim($_REQUEST['message']);

$insert_sql = "INSERT INTO outbox (number, text)" .
"VALUES('{$name}', '{$text}');";
mysql_query($insert_sql);
//$insert into outbox (number,text) values ('+7900000000000','Проверка Proverka');



echo "<p>Новая запись вставлена в базу!</p>";
?>
