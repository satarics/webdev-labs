<?php
if (\$_SERVER["REQUEST_METHOD"] == "POST") {
    \$text = \$_POST["text"];
    
    // Количество цифр (отдельных)
    \$digitCount = preg_match_all("/\d/", \$text);
    
    // Количество целых чисел
    \$numberCount = preg_match_all("/\b\d+\b/", \$text);
    
    echo "Цифр: \$digitCount, Чисел: \$numberCount";
}
?>
<form method="post">
    <textarea name="text"></textarea>
    <button type="submit">Анализ</button>
</form>
