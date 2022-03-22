<?php

function salam($nama, $salam)
{
    echo $salam . ", ";
    echo "Perkenalkan nama saya " . $nama . "<br>";
    echo "Senang berkenalan dengan anda<br>";
}

salam("Rohesa", "Hai");

echo "<hr>";

$saya = "Sidiq";
$ucapansalam = "Hello";

salam($saya, $ucapansalam);
