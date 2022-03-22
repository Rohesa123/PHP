<?php

function faktorial($angka) {
    if ($angka < 2) {
        return 1;
    } else {
        return ($angka * faktorial($angka-1));
    }
}

$i = 5;

echo "Faktorial ".$i." Adalah : ".faktorial($i);