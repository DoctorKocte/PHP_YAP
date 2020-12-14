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
    <style>
        th, td {
            padding: 10px;
        }
        th{
            background: #87CEFA;
            color: #fff;
        }

        td{
            background: #87CEEB;
        }
    </style>
    <body>
        <table>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Пароль</th>
                <th>Права доступа</th>
            </tr>
            <?php
            include_once "connection.php";
            $players = mysqli_query($connection, "SELECT * FROM `players`");
            $players = mysqli_fetch_all($players);
            foreach ($players as $player) {
                ?>
                <tr>
                    <td><?= $player[0] ?></td>
                    <td><?= $player[1] ?></td>
                    <td><?= $player[2] ?></td>
                    <td><?= $player[3] ?></td>
                    <td><a href="delete.php?id=<?=$player[0]?>">Удалить</a></td>
                </tr>
            <?php }  ?>
        </table>

<form action="index.php"><p>
   <center> <button>На главную</button></center>
</form>
</body>
</html>