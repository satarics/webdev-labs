<?php
function printStringReturnNumber() {
    echo "\nHello, World!";
    return 42;
}

$my_num = printStringReturnNumber();
echo "\nReturned number: " . $my_num;
?>
