<?php
session_start();
if (!isset(\$_SESSION["surname"])) {
    header("Location: task4_page1.php");
    exit();
}
echo "Фамилия: " . \$_SESSION["surname"] . "<br>";
echo "Имя: " . \$_SESSION["name"] . "<br>";
echo "Возраст: " . \$_SESSION["age"];
?>
