<?php
$numLanguages = 4; // Количество языков программирования
$months = 11;      // Количество месяцев

// Количество дней, которые Мэг провела за учебой
$days = $months * 16;

// Среднее количество дней на изучение каждого языка
$daysPerLanguage = $days / $numLanguages;

echo "\nDays per language: " . $daysPerLanguage;
?>
