<?php
session_start();
if($_POST['Submit']){
    if(($_POST['user_name']=="qqq")&&($_POST['user_pass']=="111")){
        $_SESSION['type'] = 1;
        header("Location: index.php");
        exit;
    }
    if(($_POST['user_name']=="admin")&&($_POST['user_pass']=="admin")){
        $_SESSION['type'] = 2;
        header("Location: index.php");
        exit;
    }
}
elseif($_POST['Exit']){
    header("Location: index.php");
    exit;
}
?>
<html>
<style>
    body {
     background: url(44.jpg);
     background-size: 100%;
     color: white;
     padding: 100px; /* Поля вокруг текста */
    }
   </style>
   <body>
       <center>
<h1>Wrong password!</h1>
</center>
</body></html>