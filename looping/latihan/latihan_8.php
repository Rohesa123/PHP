<?php

echo "Pengulangan : <br><br>";

$d = 6;
$c = 0;

for ($a = 1; $a <= 5; $a++) {
    for ($b = 2 + $c; $b <= $d; $b++) {
        echo "$b ";
    }

    $d++;
    $c++;

    echo "<br>";
}
