<?php
session_start();

if($_SESSION['type']==1){ ?>
<center> <h3>User</h3></center> <?php
    if (!isset($_SESSION['counter'][0])){
        $_SESSION['counter'][0] = 0;
    }
    if (!isset($_SESSION['counter'][1])){
        $_SESSION['counter'][1] = 0;
    }
    if (!isset($_SESSION['counter'][2])){
        $_SESSION['counter'][2] = 0;
    }
    if (!isset($_SESSION['counter'][3])){
        $_SESSION['counter'][3] = 0;
    }
    $_SESSION['counter'][0] = $_SESSION['counter'][0] + 1;
    $_SESSION['history'][] = $_SERVER['REQUEST_URI']; //записываем откуда пришел пользователь
}
elseif($_SESSION['type']==2){ ?>
<center> <h3>Administrator</h3></center> <?php
    $_SESSION['history'][] = $_SERVER['REQUEST_URI'];
}
else{ ?>
<center> <h2> <?php
    echo "Вы не вошли в систему."; 
    ?> </h2></center>
    <?php
}
//echo $_SESSION['counter'][0];
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

        <?php
        if($_SESSION['type']==0){?>
        <center><form action="registration.php">
            <button>Войти в систему</button>
        </form>
        <p>
            <h4>ДОСТУПНЫЕ САЙТЫ</h4></center>
        <?php  } 
        elseif($_SESSION['type']==1 or $_SESSION['type']==2){?>
        <center><form action="logoff.php">
            <button>Выйти из системы</button>
        </form>
        <form action="history.php">
            <button>Список сайтов</button>
        </form>
        </center>
        <?php } 
        if($_SESSION['type']==2){?>
        <br><center>
        <form action="info.php">
            <button>Информация о количествах посещений</button>
        </form>
        </center>
        <?php } ?>
        <br><br>
    <body>
        <center>
        <strong><a href="mrkitty.php">MrKitty</a></strong><br>
        <?php
        if($_SESSION['type']==1 or $_SESSION['type']==2){?>
        <strong><a href="interview.php">Interview</a></strong><br>
        </center>
        <?php } ?>
    </body>

</html>