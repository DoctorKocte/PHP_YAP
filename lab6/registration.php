<?php
include_once "connection.php";
if($_POST['Submit']){
    $name = $_POST['user_name'];
    $password = $_POST['user_pass'];
    mysqli_query($connection, "INSERT INTO `players` (`id`, `name`, `password`, `priority`) VALUES (NULL, '$name', '$password', 'user')"); //вставка из БД
    header("Location: index.php");
    exit;
}
elseif($_POST['Exit']){
    header("Location: index.php");
    exit;
}?>