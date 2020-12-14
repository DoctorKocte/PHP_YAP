<?php
session_start();
if($_SESSION['type']==1){
/*     $str = serialize($_SESSION['history']); */
    $str = serialize(($_SESSION['counter']));  //шифрует массив в строку
}
$fop = fopen("logas.txt", "w"); //“w” - создает новый пустой файл
fwrite($fop, $str); //осуществляет запись строки текста в файл
fclose($fop);
session_unset(); //Удалить все переменные сессии
session_destroy(); //Уничтожает все данные, ассоциированные с сессией
header("Location: index.php");
?>