<?php

function pesergi_panjang($panjang,$lebar)
{
    $luas = $panjang * $lebar;

    echo "Luas Pesergi Panjang = ".$luas;
}

function pesergi($sisi)
{
    $luas = $sisi * $sisi;

    echo "Luas Pesergi = ".$luas;
}

function segitiga($alas,$tinggi)
{
    $luas = ($alas * $tinggi) / 2;

    echo "Luas Segitiga = ".$luas;
}

pesergi_panjang(20,15);
echo "<hr>";
pesergi(10);
echo "<hr>";
segitiga(25,20);