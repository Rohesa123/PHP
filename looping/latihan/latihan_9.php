<?php

echo "Pengulangan : <br><br>";

$c = 1;
$e = 5;

for ($a = 1; $a <= 5; $a++) {
    for ($b = 1; $b <= $e; $b++) {
        echo "&nbsp;";
    }

    $e--;

    for ($d = 1; $d <= $c; $d++) {
        echo "* ";
    }
    $c++;
    echo "<br>";
}

// Cara Menambahkan Spasi Kosong
// echo str_repeat('&nbsp;',1);
