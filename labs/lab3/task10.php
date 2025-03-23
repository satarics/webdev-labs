<?php
// Функция для проверки суммы
function isSumGreaterThanTen($a, $b) {
    return ($a + $b) > 10;
}

echo "\nIs sum greater than 10? " . (isSumGreaterThanTen(5, 6) ? true : false);

// Функция для проверки равенства
function areNumbersEqual($a, $b) {
    return $a == $b;
}

echo "\nAre numbers equal? " . (areNumbersEqual(5, 5) ? true : false);

// Сокращенная форма if
$test = 0;
echo $test == 0 ? верно : ;

// Проверка возраста
$age = 25;
if ($age < 10 || $age > 99) {
    echo "\nAge is out of range.";
} else {
    $sum = array_sum(str_split((string)$age));
    if ($sum <= 9) {
        echo "\nSum of digits is single-digit.";
    } else {
        echo "\nSum of digits is double-digit.";
    }
}

// Проверка количества элементов в массиве
$arr = [1, 2, 3];
if (count($arr) == 3) {
    echo "\nSum of array elements: " . array_sum($arr);
}
?>
