<?php
// Обработка формы
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $category = $_POST["category"];
    $title = preg_replace("/[^a-zA-Zа-яА-Я0-9_\s]/u", "", $_POST["title"]); // Санитизация названия
    $content = $_POST["content"];
    
    // Создание файла
    if (!empty($email) && !empty($category) && !empty($title) && !empty($content)) {
        $filename = "$category/" . str_replace(" ", "_", $title) . ".txt";
        file_put_contents($filename, "Email: $email\n\n$content");
    }
}

// Получение списка объявлений
$ads = [];
$categories = ["Мода", "Аксессуары", "Украшения"];
foreach ($categories as $cat) {
    $files = glob("$cat/*.txt");
    foreach ($files as $file) {
        $content = file_get_contents($file);
        $ads[] = [
            "category" => $cat,
            "title" => pathinfo($file, PATHINFO_FILENAME),
            "content" => $content
        ];
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Доска объявлений</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        td, th { border: 1px solid #ddd; padding: 8px; }
    </style>
</head>
<body>
    <h2>Добавить объявление</h2>
    <form method="post">
        Email: <input type="email" name="email" required><br><br>
        Категория: 
        <select name="category" required>
            <option value="Мода">Мода</option>
            <option value="Аксессуары">Аксессуары</option>
            <option value="Украшения">Украшения</option>
        </select><br><br>
        Заголовок: <input type="text" name="title" required><br><br>
        Текст объявления:<br>
        <textarea name="content" rows="5" required></textarea><br>
        <button type="submit">Добавить</button>
    </form>

    <h2>Список объявлений</h2>
    <table>
        <tr>
            <th>Категория</th>
            <th>Заголовок</th>
            <th>Содержание</th>
        </tr>
        <?php foreach ($ads as $ad): ?>
        <tr>
            <td><?= htmlspecialchars($ad["category"]) ?></td>
            <td><?= htmlspecialchars($ad["title"]) ?></td>
            <td><pre><?= htmlspecialchars($ad["content"]) ?></pre></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
