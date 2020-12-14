<?php
session_start();
foreach ($_SESSION['history'] as $ehis){
    echo $ehis,"<p>";
}
?>

<html>
<style>
    body {
     background: url(44.jpg);
     background-size: 100%;
     color: white;
     border: 2px solid white; /* Параметры рамки */
     padding: 10px; /* Поля вокруг текста */
     margin-top: 50px; /* Отступ сверху */
     width: 330px;
     margin-left: 580px;
     margin-bottom: 350px;
    }
   </style>
<body>
    <p>
<form action="index.php">
    <button>Вернуться на главную</button>
</form>
</body>
</html>