<?php
\$str = "a1b2c3d10";
\$result = preg_replace_callback("/\d+/", function(\$matches) {
    return (\$matches[0] ** 5);
}, \$str);
echo \$result; // a1b32c243d100000
?>
