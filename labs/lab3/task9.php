<?php
// Заполнение массива
$array = [];
for ($i = 1; $i <= 5; $i++) {
    $array[] = str_repeat(x, $i);
}
echo "\nArray: " . implode(", ", $array);

// Функция arrayFill
function arrayFill($value, $count) {
    return array_fill(0, $count, $value);
}

echo "\nArray filled: " . implode(", ", arrayFill(x, 5));

// Сумма элементов двухмерного массива
$twoDArray = [[1, 2, 3], [4, 5], [6]];
$sum = 0;
foreach ($twoDArray as $subArray) {
    $sum += array_sum($subArray);
}
echo "\nSum of 2D array: " . $sum;

// Создание массива с помощью двух циклов
$array = [];
$count = 1;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $array[$i][$j] = $count++;
    }
}
echo "\n2D array: " . json_encode($array);

// Умножение и сложение элементов массива
$array = [2, 5, 3, 9];
$result = ($array[0] * $array[1]) + ($array[2] * $array[3]);
echo "\nResult: " . $result;

// Массив с ключами
$user = [name => John, surname => Doe, patronymic => Smith];
echo "\nUser: " . $user[surname] . " " . $user[name] . " " . $user[patronymic];

// Массив с датой
$date = [year => date(Y), month => date(m), day => date(d)];
echo "\nDate: " . $date[year] . "-" . $date[month] . "-" . $date[day];

// Количество элементов в массиве
$arr = [a, b, c, d, e];
echo "\nNumber of elements: " . count($arr);

// Последний и предпоследний элементы массива
echo "\nLast element: " . end($arr);
echo "\nSecond last element: " . $arr[count($arr) - 2];
?>
