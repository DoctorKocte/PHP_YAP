<?php
session_start();
$_SESSION['history'][] = $_SERVER['REQUEST_URI'];
$_SESSION['counter'][2] = $_SESSION['counter'][2] + 1;
$file = file_get_contents("log.txt");//читает содержимое файла в строку
$value = unserialize($file);

echo "index - ", $value[0],"<p>";
echo "MrKitty - ",$value[1],"<p>";
echo "Interview - ",$value[2],"<p>";

?>
<html>
    
<style>
    body {
     background: url(55.jpg);
     background-size: 100%;
     color: white;
     padding: 100px; /* Поля вокруг текста */
     margin-top: 50px; /* Отступ сверху */
     width: 330px;
     margin-left: 580px;
     margin-bottom: 350px;
    }
   </style>
<form action="index.php">
    <button>Вернуться на главную</button>
</form>

</html>