<?php

if (isset($_POST['kirim_1'])) {
    $matrix = $_POST['matrix'];
    for ($a = 0; $a < count($matrix); $a++) {
        for ($b = 0; $b < count($matrix[$a]); $b++) {
            echo $matrix[$a][$b] . " ";
        }
        echo "<br>";
    }
}
