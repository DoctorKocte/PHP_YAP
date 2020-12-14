<html>
<center>
<form action='' method="GET">
<h3>Введите данные </h3>
(находит только точные совпадения)
    <input type="text"  name="search"><p>
    <input type='submit' value='Поиск записи' name="Submit">
</form>
<?php
include_once 'class.php';
$Player_array->Search($_GET['search']);
?>
    <form action="index.php" method="GET">
        <button>Назад</button>
    </form>
</center>
</html>