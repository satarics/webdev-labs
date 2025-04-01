<?php
session_start();
if (\$_SERVER["REQUEST_METHOD"] == "POST") {
    \$_SESSION["project"] = \$_POST["project"];
    \$_SESSION["deadline"] = \$_POST["deadline"];
    \$_SESSION["budget"] = \$_POST["budget"];
    header("Location: task4_v18_page2.php");
    exit();
}
?>
<form method="post">
    Название проекта: <input type="text" name="project"><br>
    Сроки: <input type="text" name="deadline"><br>
    Бюджет: <input type="number" name="budget"><br>
    <button type="submit">Сохранить</button>
</form>
