<?php
session_start();
if (\$_SERVER["REQUEST_METHOD"] == "POST") {
    \$_SESSION["surname"] = \$_POST["surname"];
    \$_SESSION["name"] = \$_POST["name"];
    \$_SESSION["age"] = \$_POST["age"];
    header("Location: task4_page2.php");
    exit();
}
?>
<form method="post">
    Фамилия: <input type="text" name="surname"><br>
    Имя: <input type="text" name="name"><br>
    Возраст: <input type="number" name="age"><br>
    <button type="submit">Сохранить</button>
</form>
