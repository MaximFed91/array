<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$x = array();
$n = 0;
$marker = false;
for ($i = 1; $i <= 100; $i++) {    //выводим массив случайных чисел, сразу же проверя на совпадения и выделяя последовательные
    $x[$i] = rand(1, 20);          // одинаковые элементы.
    $k = $i - 1;
    $m = $i - 2;
    if ($i > 1) {
        if ($x[$i] == $x[$k] and $x[$i] == $x[$m] and $i > 2) {
            echo "<mark>$x[$i]</mark>  ";
            $n++;
        } else {
            if ($x[$i] == $x[$k]) {
                echo "<mark>$x[$k]</mark>    <mark>$x[$i]</mark>   ";
                $n++;
                $marker = true;
            } else {
                if (!$marker) {
                    echo "$x[$k]   ";
                    if ($i == 100) {
                        echo "$x[$i]  ";
                    }
                } else {
                    $marker = false;
                }
            }
        }
    }
    $a = $i % 10;
    if (!$a) {
        echo " <br>";
    }
}
echo " <br> <br> Количество последовательных пар одинаковых элементов $n . ";  //результат совпадений.
?>
</body>
</html>



	