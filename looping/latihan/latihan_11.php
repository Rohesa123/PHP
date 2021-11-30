<?php

echo "Pengulangan : <br><br>";

// for didalam for
// $c = 1;
// $e = 5;

// for ($a = 1; $a <= 5; $a++) {
//     for ($b = 1; $b <= $e; $b++) {
//         echo "&nbsp;";
//     }

//     $e--;

//     for ($d = 1; $d <= $c; $d++) {
//         echo "* ";
//     }
//     $c++;
//     echo "<br>";
// }

// $f = 5;
// $g = 0;

// for ($h = 1; $h <= 5; $h++) {
//     for ($i = 1 - $g; $i >= 0; $i--) {
//         echo "&nbsp;";
//     }

//     $g -= 1;

//     for ($j = 2; $j <= $f; $j++) {
//         echo "* ";
//     }
//     $f--;
//     echo "<br>";
// }

// for didalam for didalam for
for ($r = 1; $r <= 1; $r++) {
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

    $f = 5;
    $g = 0;

    for ($h = 1; $h <= 5; $h++) {
        for ($i = 1 - $g; $i >= 0; $i--) {
            echo "&nbsp;";
        }

        $g -= 1;

        for ($j = 2; $j <= $f; $j++) {
            echo "* ";
        }
        $f--;
        echo "<br>";
    }

}
