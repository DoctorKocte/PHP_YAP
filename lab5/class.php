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
<body>
<?php  //объявляем класс Игрок для записи новых футболистов
class Player{
    //паблик для видимости в других модулях
    public $headers = [];
    public $inf = [];

    public function Player($headers)  {
        $this->headers=$headers;
    }

    public function Add($row) {      //добавление игрока в массив
        $mas=[];
        foreach($this->headers as $header)
        {
            if(!isset($row[$header])) { 
               $row[$header] = "";
            }
            $mas[]=$row[$header];
        }
        $this->inf[]=$mas;
    }

    public function Write($row)  {   //запись в файл 
        $filepath="players.txt";
        $row=serialize($row);
        file_put_contents($filepath,$row);
    }

    public function Read( $row) {  // считывание из файла
        $filepath="players.txt";
        $row=file_get_contents($filepath);
        $row=unserialize($row);
        return $row;
    }

    public function Search($search) {     //поиск 
        if($_GET['Submit']) {
            for($i=0; $i < count($this->inf); $i++) {
                for($j = 0;$j<count($this->inf[$i]);$j++) {
                    if($search == $this->inf[$i][$j]) { 
                        echo "<h4>Игрок найден :  ".($i+1)." строка и ".($j+1)." столбец </h4><p>";        
                        $count++ ;
                    }
                }
            }
            if (!$count) echo "Игрок не найден.<br>";
        }
    }
   //конструктор используется для инициализации свойств во время создания объекта
    function __construct()    {      //конструктор //в более ранних версиях имя совпадало с классом
        echo "<center> Сработал конструктор </center><p>";
        $this->inf=Read($this->inf);
    }
   //деструктор это cпециальная функция, которая автоматически вызывается при удалении объекта
    function __destruct() {         //деструктор
        echo "<center> Сработал деструктор </center><p>";
        unset($this->inf);
        unset($this->header);
    }
}

class table extends Player  {   //класс для создания таблицы игроков
    public $cellpading ="10"; //внешний вид таблицы
    public $bgcolor; //работа с цветом ячеек

    function __construct($headers, $bgcolor) {
        Player::Player($headers);
        $this->bgcolor=$bgcolor;
    }

    function Out() {   //вывод таблицы
        echo "<table bgcolor = \"black\" cellpadding='".$this->cellpading."'><tr>";
        foreach ($this->headers as $header) { 
            echo "<th bgcolor='".$this->bgcolor."'>$header</th>";
        }
        foreach ($this->inf as $y) {
            echo "<tr>";
            foreach ($y as $x) { 
                echo "<td bgcolor='".$this->bgcolor."'> $x </td>";
            }
        }
        echo "</table>";
    }
}
$Player_array= new table(array("Имя","Фамилия","Номер"),"MidnightBlue");
$Player_array->inf=$Player_array->Read($Player_array->inf);
?>
</body>
</html>