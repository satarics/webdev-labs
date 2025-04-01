<?php
if (\$_SERVER["REQUEST_METHOD"] == "POST") {
    \$text = \$_POST["text"];
    \$charCount = strlen(\$text);
    \$wordCount = count(explode(" ", trim(\$text)));
    echo "Символов: \$charCount, слов: \$wordCount";
}
?>
<form method="post">
    <textarea name="text"></textarea>
    <button type="submit">Отправить</button>
</form>
