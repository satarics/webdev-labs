<?php
session_start();
if (!isset(\$_SESSION["project"])) {
    header("Location: task4_v18_page1.php");
    exit();
}
echo "Проект: " . htmlspecialchars(\$_SESSION["project"]) . "<br>";
echo "Сроки: " . htmlspecialchars(\$_SESSION["deadline"]) . "<br>";
echo "Бюджет: " . htmlspecialchars(\$_SESSION["budget"]) . "₽";
?>
