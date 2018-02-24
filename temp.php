<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title> Temperature WL </title>
</head>

<body>
<div class="wrapper">
        <h1>Системы</h1>
<ul class="dropdown">
                <li class="dropdown-top">
                        <a class="dropdown-top" href="/">Админки</a>
                        <ul class="dropdown-inside">
                                <li><a href="https://192.168.1.252">ESXi</a></li>
                                <li><a href="https://192.168.1.99">openmediavault</a></li>
                                <li><a href="https://localhost/era/webconsole/">ESETnod32</a></li>
                                <li><a href="http://192.168.1.222/zabbix/">Zabbix</a></li>
                                <li><a href="http://192.168.1.181:8081/">10 Strike</a></li>
                                <li><a href="https://localhost:8443/manage/account/login?redirect=%2Fmanage">UniFi</a></li>
                </ul>
                </li>

                <li class="dropdown-top">
                        <a class="dropdown-top" href="/">Хосты</a>
                        <ul class="dropdown-inside">
                                <li><a href="/">Нью-Йорк</a></li>
                                <li><a href="/">Лос-Анжелес</a></li>
                                <li><a href="/">Чикаго</a></li>
                                <li><a href="/">Хьюстон</a></li>
                                <li><a href="/">Филадельфия</a></li>
                                <li><a href="/">Финикс</a></li>
                                <li><a href="/">Сан-Антонио</a></li>
                        </ul>
                </li>

                <li class="dropdown-top">
                        <a class="dropdown-top" href="/">Сайты</a>
                        <ul class="dropdown-inside">
                                <li><a href="https://192.168.1.99/temp.php">Температура</a></li>
                                <li><a href="/">Марсель</a></li>
                                <li><a href="/">Лион</a></li>
                                <li><a href="/">Тулуза</a></li>
                                <li><a href="/">Ницца</a></li>
                                <li><a href="/">Нант</a></li>
                                <li><a href="/">Страссбург</a></li>
                        </ul>
                </li>
 <li class="dropdown-top">
                        <a class="dropdown-top" href="/">Магазины</a>
                        <ul class="dropdown-inside">
                                <li><a href="/">Рим</a></li>
                                <li><a href="/">Милан</a></li>
                                <li><a href="/">Неаполь</a></li>
                                <li><a href="/">Турин</a></li>
                                <li><a href="/">Палермо</a></li>
                        </ul>
                </li>
        </ul>
        <div class="clear"></div>

 <hr>


        <h2><a class="imagetip" href="АДРЕС ССЫЛКИ" target="_blank">Мониторинг температуры<span>
<img class="alignnone" src="data/temp_d.png"></span></a></h2>

<p>Установить порог срабатывания оповещений изменения температуры в серверной:</p>
        <hr>
 <form method="post" action="handler.php">

<p><font face='Arial'>Оповещать после:</font>

        <select name="username" size="1">
        <optgroup label="Standart">
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
<option value="20" selected="selected">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
        </optgroup>
        <optgroup label="Extrim">
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>

  <input type="Submit" value="Изменить" />

</optgroup>

</select>
</p>


</div>
</body>


<?php
$text = file_get_contents( "/media/ed0efe0f-97ef-469a-9006-d5aac27487c8/Public/temperatura.log" );
?>


<p> <h2><center> <font color="#FFFFFF" face='Arial'>Сейчас температура в серверной: <?php print $text ?> C&#176; </font></h2></p>


<div class="wrapper">
<br>
<center> <img src='data/temp_d.png'> </center><br>
<center> </h2> <img src='data/temp_w.png'> </center><br>
<center> <img src='data/temp_m.png'> </center><br>
<center> <img src='data/temp_y.png'> </center>
</div>
</body>
</html>
