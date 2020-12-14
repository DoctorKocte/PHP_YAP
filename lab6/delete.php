<?php
 require_once "connection.php";
 $id = $_GET['id'];
 mysqli_query($connection, "DELETE FROM `users` WHERE `users`.`id` = '$id'"); //запрос на удаление
 header("Location: info.php");
?>