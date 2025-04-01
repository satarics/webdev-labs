<?php
session_start(); // Добавляем сессии
$categories = ['Недвижимость', 'Транспорт', 'Работа'];
$baseDir = __DIR__;

// Обработка формы
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Защита от повторной отправки
    if (!isset($_SESSION['last_post']) || $_SESSION['last_post'] != $_POST) {
        $_SESSION['last_post'] = $_POST;
        
        $email = htmlspecialchars($_POST['email']);
        $category = htmlspecialchars($_POST['category']);
        $title = trim(htmlspecialchars($_POST['title']));
        $content = htmlspecialchars($_POST['content']);
        
        // Генерация имени файла БЕЗ временной метки
        $cleanTitle = preg_replace('/[^\p{L}\p{N}\s_-]/u', '_', $title);
        $cleanTitle = substr($cleanTitle, 0, 50);
        $filename = "$cleanTitle.txt"; // Убираем time()
        $filepath = "$baseDir/$category/$filename";
        
        if (in_array($category, $categories)) {
            if (!file_exists("$baseDir/$category")) {
                mkdir("$baseDir/$category", 0755, true);
            }
            file_put_contents($filepath, "Email: $email\nЗаголовок: $title\n\n$content");
        }
    }
    header("Location: " . $_SERVER['PHP_SELF']); // Редирект после отправки
    exit();
}

// ... (остальной код без изменений) ...
