<?php

function persegi_panjang($panjang, $lebar)
{
    $luas = $panjang * $lebar;

    echo "Luas Persegi Panjang = " . $luas;
}
function segitiga($alas, $tinggi)
{
    $luas = 0.5 * ($alas * $tinggi);

    echo "Luas Segitiga = " . $luas;
}
function persegi($sisi)
{
    $luas = $sisi * $sisi;

    echo "Luas Persegi = " . $luas;
}
function jajar_genjang($alas, $tinggi)
{
    $luas = $alas * $tinggi;

    echo "Luas Jajar Genjang = " . $luas;
}
function belah_ketupat($diagonal_1, $diagonal_2)
{
    $luas = 0.5 * ($diagonal_1 * $diagonal_2);

    echo "Luas Belah Ketupat = " . $luas;
}
function layang_layang($sisi_1, $sisi_2)
{
    $keliling = 2 * ($sisi_1 + $sisi_2);

    echo "Keliling Layang-layang = " . $keliling;
}
function trapesium($sisi_a, $sisi_b, $sisi_c, $sisi_d)
{
    $keliling = $sisi_a + $sisi_b + $sisi_c + $sisi_d;

    echo "Keliling Trapesium = " . $keliling;
}
function lingkaran($jari_jari)
{
    $luas = 3.14 * ($jari_jari * $jari_jari);

    echo "Luas Lingkaran = " . $luas;
}

persegi_panjang(10, 8);
echo "<hr>";
segitiga(20, 18);
echo "<hr>";
persegi(5);
echo "<hr>";
jajar_genjang(12, 10);
echo "<hr>";
belah_ketupat(10, 8);
echo "<hr>";
layang_layang(14, 12);
echo "<hr>";
trapesium(6, 8, 10, 12);
echo "<hr>";
lingkaran(14);
