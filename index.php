<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Hello, world!<br />"; //эта строчко выводит привет мир
     echo "Hello, world!";
    $number = 123; //численные переменные 
    $float = 6.57; // переменная с плавающей точкой 
    $string = "Привет"; //строковая переменная
    $bool = true; //тру фолс 
    echo "Андрей $string";
    echo PHP_VERSION;
    define ("PI", 3.1423);
    echo PI;
    echo defined("PI");
    echo "<br />";
    $a =19;
    $b = 930;
    $c = $a + $b;
    echo "Ответ $c";
    $ostato =$b % $a;
    echo "<br />$ostato<br/>";
    print("HELLOW WORLD!!!! HAHAHAHAAh");
    $p = 5 + $c;
    print($p);
    ?>
    
</body>
</html>