<html>
<style>
    body {
     background: url(3.png);
     background-size: 100%;
     color: white;
     border: 2px solid white; /* Параметры рамки */
     padding: 20px; /* Поля вокруг текста */
     margin-top: 150px; /* Отступ сверху */
     width: 330px;
     margin-left: 600px;
     margin-bottom: 350px;
    }
   </style>

<?php
include_once 'class.php';
?>
<body>
<center> 
<?php  //проверяем на пустоту и если все ок добавляем запись и записываем в файл, иначе ошибка
if(isset($_POST['Имя']) && isset($_POST['Фамилия']) && isset($_POST['Номер'])  && !empty($_POST['Имя']) && !empty($_POST['Фамилия']) && !empty($_POST['Номер'])) {      
    $Player_array->Add(array("Имя"=>$_POST['Имя'],"Фамилия"=>$_POST['Фамилия'],"Номер"=>$_POST['Номер']));
    $Player_array->Write($Player_array->inf);
    echo "Пользователь успешно добавлен.<p>";
}
else {
    exit("Неверно введены данные.");
}?>
    <form action="index.php" method="GET">
        <button>Назад</button>
    </form>
    </center>
    </body>
</html>