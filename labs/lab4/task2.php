<?php
\$str = "a1b2c3";
\$result = preg_replace_callback("/\d+/", function(\$matches) {
    return (\$matches[0] ** 3);
}, \$str);
echo \$result;
?>
