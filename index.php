<?php

$number1 = 10; // задаем значение первого числа
$number2 = 5; // задаем значение второго числа

// вычисляем сумму, разность, произведение и частное от деления
$sum = $number1 + $number2;
$difference = $number1 - $number2;
$product = $number1 * $number2;

if ($number2 != 0) {
    $quotient = $number1 / $number2;
} else {
    $quotient = null;
    echo "Деление на 0 невозможно" . PHP_EOL;
}

echo "Сумма: " . $sum . PHP_EOL;
echo "Разность: " . $difference . PHP_EOL;
echo "Произведение: " . $product . PHP_EOL;
if ($quotient !== null) {
    echo "Частное от деления: " . $quotient . PHP_EOL;
}

// проверяем условие на положительность чисел
if ($number1 > 0 && $number2 > 0) {
    echo "Оба числа положительные" . PHP_EOL;
}