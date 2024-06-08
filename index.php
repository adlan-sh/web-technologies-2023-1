<?php

// Задание 1
echo("<h3>Задание 1</h3>");

$a = 3;
$b = -4;

if ($a >= 0 && $b >= 0) {
    echo $a - $b;
} elseif ($a < 0 && $b < 0) {
    echo $a * $b;
} elseif (($a < 0 && $b >= 0) || ($a >= 0 && $b < 0)) {
    echo $a + $b;
}
echo("<hr>");

//Задание 2
echo("<h3>Задание 2</h3>");

$a = 2;
switch ($a) {
    case 0:
        echo '0 ';
    case 1:
        echo '1 ';
    case 2:
        echo '2 ';
    case 3:
        echo '3 ';
    case 4:
        echo '4 ';
    case 5:
        echo '5 ';
    case 6:
        echo '6 ';
    case 7:
        echo '7 ';
    case 8:
        echo '8 ';
    case 9:
        echo '9 ';
    case 10:
        echo '10 ';
    case 11:
        echo '11 ';
    case 12:
        echo '12 ';
    case 13:
        echo '13 ';
    case 14:
        echo '14 ';
    case 15:
        echo '15';
        break;
    default:
        echo 'Значение "a" не входит в промежуток [0..15]';
        break;
}
echo("<hr>");

// Задание 3
echo("<h3>Задание 3</h3>");

function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    if ($b == 0)
        return 'На ноль делить нельзя';
    return $a / $b;
}

echo("<p>Сложение: " . add(3, 4) . "</p>");
echo("<p>Вычитание: " . subtract(3, 4) . "</p>");
echo("<p>Умножение: " . multiply(3, 4) . "</p>");
echo("<p>Деление: " . divide(3, 4) . "</p>");
echo("<hr>");

// Задание 4
echo("<h3>Задание 4</h3>");

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case '+':
            return add($arg1, $arg2);
        case '-':
            return subtract($arg1, $arg2);
        case '*':
            return multiply($arg1, $arg2);
        case '/':
            return divide($arg1, $arg2);
    }
    return 0;
}
echo mathOperation(5, 8, '*');
echo("<hr>");

// Задание 6
echo("<h3>Задание 6</h3>");

function power($val, $pow) {
    if ($pow == 1) {
        return $val;
    }
    else {
        return  $val * power($val, $pow - 1);
    }
}
echo(power(3, 5));
echo("<hr>")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Задание 5</h3>
    <p>Текущий год 1-й способ: <?php echo date('Y'); ?></p>
    <?php
        $currYear = date('Y');
        $content = file_get_contents('st.html');
        $content = str_replace('{{ year }}', $currYear, $content);
        echo $content;
    ?>
    <?php require('st.php') ?>
</body>
</html>