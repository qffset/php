
	<html>
<meta charset='utf-8'>

	<head>
	<title>Мониторинг температуры</title>
	</head>

	<body>

	<?php

	echo "<h1>Оповещение в телегу от " . $_POST["username"] . "  C&#176; </h1>";



// строка, которую будем записывать
$text = $_POST["username"];
 
// открываем файл, если файл не существует,
//делается попытка создать его
$fp = fopen("temp_alarm.log", "w");
 
// записываем в файл текст
fwrite($fp, $text);
 
// закрываем
fclose($fp);

shell_exec('/home/temp_alarm.sh');




	?>

	</body>
	</html>
