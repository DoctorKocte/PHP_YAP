<?php
include_once "connection.php";
$players = mysqli_query($connection, "SELECT * FROM `players`");
$players = mysqli_fetch_all($players);
session_start();
foreach ($players as $player)
{
    $name = "$player[1]";
    $password = "$player[2]";
    $priority = "$player[3]";
    if($_POST['Submit']){
        if(($_POST['user_name']==$name)&&($_POST['user_pass']==$password)){
            $_SESSION['type']=$priority;
            $_SESSION['name']=$name;
            header("Location: index.php");
            exit;
        }
        elseif(($_POST['user_name']==$name)&&($_POST['user_pass']==$password)){
            $_SESSION['type']=$priority;
            $_SESSION['name']=$name;
            header("Location: index.php");
            exit;
        }
    }
    elseif($_POST['Exit']){
        header("Location: index.php");
        exit;
    }
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
   <body><center>
<h3>Неверный пароль.</h3></center>
</body></html>