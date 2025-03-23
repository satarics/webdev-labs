<?php
function increaseEnthusiasm($str) {
    return $str . "!";
}

echo "\n" . increaseEnthusiasm("Hello");

function repeatThreeTimes($str) {
    return $str . $str . $str;
}

echo "\n" . repeatThreeTimes("Hi");

echo "\n" . increaseEnthusiasm(repeatThreeTimes("Hey"));

function cut($str, $length = 10) {
    return substr($str, 0, $length);
}

echo "\n" . cut("This is a long string", 5);

// Рекурсия для вывода элементов массива
function printArrayRecursively($array, $index = 0) {
    if ($index < count($array)) {
        echo "\n" . $array[$index];
        printArrayRecursively($array, $index + 1);
    }
}

$array = [1, 2, 3, 4, 5];
printArrayRecursively($array);

// Сложение цифр числа до однозначного
function sumDigits($number) {
    while ($number > 9) {
        $number = array_sum(str_split((string)$number));
    }
    return $number;
}

echo "\nSum of digits: " . sumDigits(12345);
?>
