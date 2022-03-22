<?php

function hitungUmur($thn_lahir, $thn_sekarang)
{
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function salam($nama, $salam = "Assalamualaikum")
{
    echo $salam . ", ";
    echo "Perkenalkan nama saya " . $nama . "<br>";
    echo "Senang berkenalan dengan anda<br>";
    echo "Saya Berusia " . hitungUmur(2005, 2022) . " Tahun<br>";
    echo "Senang Berkenalan dengan anda<br>";
}

salam("Rohesa");
