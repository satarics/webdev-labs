<?php
// Работа с %
$a = 10;
$b = 3;
echo "\nRemainder: " . ($a % $b);

// Проверка деления без остатка
if ($a % $b == 0) {
    echo "\nДелится: " . ($a / $b);
} else {
    echo "\nДелится с остатком: " . ($a % $b);
}

// Работа со степенью и корнем
$st = pow(2, 10);
echo "\n2^10: " . $st;

echo "\nSquare root of 245: " . sqrt(245);

$array = [4, 2, 5, 19, 13, 0, 10];
$sumOfSquares = 0;
foreach ($array as $num) {
    $sumOfSquares += $num ** 2;
}
echo "\nSquare root of sum of squares: " . sqrt($sumOfSquares);

// Работа с функциями округления
$sqrt379 = sqrt(379);
echo "\nSquare root of 379: " . round($sqrt379) . ", " . round($sqrt379, 1) . ", " . round($sqrt379, 2);

$sqrt587 = sqrt(587);
$rounded = [floor => floor($sqrt587), ceil => ceil($sqrt587)];
echo "\nSquare root of 587: " . $rounded[floor] . ", " . $rounded[ceil];

// Работа с min и max
$numbers = [4, -2, 5, 19, -130, 0, 10];
echo "\nMin: " . min($numbers) . ", Max: " . max($numbers);

// Работа с рандомом
echo "\nRandom number: " . rand(1, 100);

$randomArray = [];
for ($i = 0; $i < 10; $i++) {
    $randomArray[] = rand(1, 100);
}
echo "\nRandom array: " . implode(", ", $randomArray);

// Работа с модулем
$a = 10;
$b = 3;
echo "\nAbsolute difference: " . abs($a - $b);

$array = [1, 2, -1, -2, 3, -3];
$positiveArray = array_map(abs, $array);
echo "\nPositive array: " . implode(", ", $positiveArray);

// Общее
$number = 30;
$divisors = [];
for ($i = 1; $i <= $number; $i++) {
    if ($number % $i == 0) {
        $divisors[] = $i;
    }
}
echo "\nDivisors of 30: " . implode(", ", $divisors);

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$count = 0;
foreach ($array as $num) {
    $sum += $num;
    $count++;
    if ($sum > 10) {
        break;
    }
}
echo "\nNumber of elements to sum > 10: " . $count;
?>
