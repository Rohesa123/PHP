<?php
function angka($a)
{
    if ($a < 2) {
        return 1;
    } else {
        return (angka($a - 1) * $a);
    }
}
echo angka(random_int(1,5));
