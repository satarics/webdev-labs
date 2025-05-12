<!DOCTYPE html>
<html>
<head>
    <title>Доска объявлений</title>
</head>
<body>
    <h1>Добавить объявление</h1>
    <form method="POST" action="db_operations.php">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="title" placeholder="Заголовок" required><br>
        <textarea name="description" placeholder="Описание" required></textarea><br>
        <select name="category">
            <option value="electronics">Электроника</option>
            <option value="books">Книги</option>
            <option value="other">Другое</option>
        </select><br>
        <button type="submit">Опубликовать</button>
    </form>

    <h2>Список объявлений</h2>
    <?php include 'db_operations.php'; displayAds(); ?>
</body>
</html>
