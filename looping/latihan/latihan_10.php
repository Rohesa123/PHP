<?php

echo "Pengulangan : <br><br>";

$c = 5;
$e = 0;

for ($a = 1; $a <= 5; $a++) {
    for ($b=5-$e; $b >= 0; $b--) {
        echo "&nbsp;";
    }

    $e-=1;

    for ($d = 1; $d <= $c; $d++) {
        echo "* ";
    }
    $c--;
    echo "<br>";
}
