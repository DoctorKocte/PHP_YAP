<?php
include_once "connection.php";
session_start();
?> 
<center> <?php
if($_SESSION['type']=="user"){
    echo "Пользователь";
    echo "<p>Добро пожаловать, ", $_SESSION['name'];
}
elseif($_SESSION['type']=="admin"){
    echo "Администратор";
    echo "<p>Добро пожаловать, ", $_SESSION['name'];
}
else{
    echo "<h3>Вы не вошли в систему</h3><p>"; 
}
?>
</center>
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
        <?php
        if($_SESSION['type']=="user" or $_SESSION['type']=="admin"){?>
        <center><form action="logoff.php">
            <button>Выйти из системы</button>
        </form></center>
        <?php } 
        elseif($_SESSION['type']==0) { ?>
        <center><form action="login.php">
            <button>Вход в систему</button>
        </form><form action="registration1.php">
            <button>Регистрация</button>
        </form>
        <?php } ?>
        <?php
        if($_SESSION['type']=="admin"){?>
        <br>
        <form action="info.php">
           <center> <button>Данные о пользователях</button></center>
        </form>
        <?php } ?>
        <br><br>
    <body>
    <center><h3>ДОСТУПНЫЕ САЙТЫ</h3><p>
        <strong><a href="MrKitty.php">MrKitty</a></strong><br>
        <?php
        if($_SESSION['type']=="user" or $_SESSION['type']=="admin"){?>
        <strong><a href="Interview.php">Intrerview</a></strong><br></center>
        <?php } ?>
    </body>
</html>