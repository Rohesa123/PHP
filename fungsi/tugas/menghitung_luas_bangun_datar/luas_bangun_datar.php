<?php

function persegi($sisi)
{
    $luas = $sisi * $sisi;

    echo "Luas Persegi Dengan Sisi " . $sisi . " Adalah : " . $luas;
}
function persegiPanjang($panjang, $lebar)
{
    $luas = $panjang * $lebar;

    echo "Luas Persegi Panjang Dengan Panjang " . $panjang . ", Dan Lebar " . $lebar . " Adalah : " . $luas;
}
function segitiga($alas, $tinggi)
{
    $luas = 0.5 * ($alas * $tinggi);

    echo "Luas Segitiga Dengan Alas " . $alas . ", Dan Tinggi " . $tinggi . " Adalah : " . $luas;
}
function lingkaran($jari_jari)
{
    $luas = 3.14 * ($jari_jari * $jari_jari);

    echo "Luas Lingkaran Dengan Jari-jari " . $jari_jari . " Adalah : " . $luas;
}

persegi(5);
echo "<hr>";
persegiPanjang(15,12);
echo "<hr>";
segitiga(10,8);
echo "<hr>";
lingkaran(16);


