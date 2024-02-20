<?php

// Задание 1
echo("<h3>Задание 1</h3>");

$i = 0;
do {
    if ($i == 0) {
        echo $i . ' - это ноль.';
    } elseif ($i % 2 == 0) {
        echo $i . ' - чётное число.';
    } else {
        echo $i . ' - нечётное число.';
    }
    echo '<br>';
    $i++;
} while ($i <= 10);

echo("<hr>");

//Задание 2
echo("<h3>Задание 2</h3>");

$dict = [
    'Московская область' => [
        'Москва',
        'Зеленоград',
        'Клин'
    ],
    'Ленинградская область' => [
        'Санкт-Петербург',
        'Всеволожск',
        'Павловск',
        'Кронштадт'
    ],
    'Рязанская область' => [
        'Рязань',
        'Касимов',
        'Ряжск',
        'Шацк',
        'Тума',
    ]
];
foreach ($dict as $reg => $cities) {
    echo '<h4>' . $reg . ': <br></h4>';
    echo implode(', ', $cities) . '.';
    echo '<br>';
}

echo("<hr>");

// Задание 3
echo("<h3>Задание 3</h3>");

$letters = array(
    'a' => 'a',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'д' => 'd',
    'е' => 'e',
    'ё' => 'yo',
    'ж' => 'zh',
    'з' => 'z',
    'и' => 'i',
    'й' => 'j',
    'к' => 'k',
    'л' => 'l',
    'м' => 'm',
    'н' => 'n',
    'о' => 'o',
    'п' => 'p',
    'р' => 'r',
    'с' => 's',
    'т' => 't',
    'у' => 'u',
    'ф' => 'f',
    'х' => 'x',
    'ц' => 'c',
    'ч' => 'ch',
    'ш' => 'sh',
    'щ' => 'shh',
    'ъ' => '``',
    'ы' => 'y',
    'ь' => '`',
    'э' => 'e`',
    'ю' => 'yu',
    'я' => 'ya'
);

$string = "раз, два, три, четыре, пять.";
echo $string;
echo transliteration($string);

function transliteration($str) {
    $chars = str_split($str);
    $res = "";
    foreach ($chars as $letter) {
        if (array_key_exists($letter, $letters))
            $res .= $letters[$letter];
        else
            $res .= $letter;
    }
    return $res;
}

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
    <p>Текущий год (1-й способ): <?php echo date('Y'); ?></p>
    <?php
        $currYear = date('Y');
        $content = file_get_contents('site.html');
        $content = str_replace('{{ year }}', $currYear, $content);
        echo $content;
    ?>
    <?php require('site.php') ?>
</body>
</html>