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
    <head>
    <title>Add</title>
    </head>
    <body>
    <center>
    <form action="insert.php" method="post">
    <h1> Заполните форму </h1>
        Имя: <input type="text" name="Имя"><p>
        Фамилия: <input type="text" name="Фамилия"><p>
        Номер игрока: <input type="text" name="Номер"><p>
        <input type="submit" name="Submit" value="Добавить"><p>
    </form>
    </center>
    </body>
</html>