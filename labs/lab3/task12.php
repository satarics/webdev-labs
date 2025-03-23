<?php
// Среднее арифметическое элементов массива
$array = [1, 2, 3, 4, 5];
echo "\nAverage: " . (array_sum($array) / count($array));

// Сумма чисел от 1 до 100
echo "\nSum of numbers from 1 to 100: " . array_sum(range(1, 100));

// Массив с квадратными корнями
$array = [4, 9, 16];
$sqrtArray = array_map(sqrt, $array);
echo "\nSquare roots: " . implode(", ", $sqrtArray);

// Массив с буквами и числами
$alphabet = range(a, z);
$numbers = range(1, 26);
$combined = array_combine($alphabet, $numbers);
echo "\nCombined array: " . json_encode($combined);

// Сумма пар чисел
$str = 1234567890;
$pairs = str_split($str, 2);
echo "\nSum of pairs: " . array_sum($pairs);
?>
