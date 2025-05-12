<?php
function getDBConnection() {
    $mysqli = new mysqli(
        hostname: 'db',
        username: 'root',
        password: 'helloworld',
        database: 'web'
    );

    if ($mysqli->connect_errno) {
        die("Ошибка подключения: " . $mysqli->connect_error);
    }
    return $mysqli;
}

function addAd($email, $title, $description, $category) {
    $mysqli = getDBConnection();
    $stmt = $mysqli->prepare("INSERT INTO ad (email, title, description, category) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $email, $title, $description, $category);
    $stmt->execute();
    $stmt->close();
}

function displayAds() {
    $mysqli = getDBConnection();
    $result = $mysqli->query("SELECT * FROM ad ORDER BY created DESC");

    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>";
            echo "<strong>" . htmlspecialchars($row['title']) . "</strong><br>";
            echo "Категория: " . htmlspecialchars($row['category']) . "<br>";
            echo htmlspecialchars($row['description']) . "<br>";
            echo "<em>" . htmlspecialchars($row['email']) . "</em>";
            echo "</li>";
        }
        echo "</ul>";
    } else {
        echo "Объявлений пока нет.";
    }
}

// Обработка POST-запроса
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    addAd(
        $_POST['email'],
        $_POST['title'],
        $_POST['description'],
        $_POST['category']
    );
    header("Location: index.php");
    exit;
}
