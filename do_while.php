<?php

$a = 2;
do {
    echo "\$a is equal to {$a}" . PHP_EOL;
    $a *= $a;
} while ($a <= 1000000);

?>