<?php
// Pengisian Nilai
$a = 32;

// Pengisian Dan Penambahan
$c = $a += 2;
$a = 32;
echo "$a += 2 : $c";
echo "<hr>";

// Pengisian Dan Penguarangan
$c = $a -= 2;
$a = 32;
echo "$a -= 2 : $c";
echo "<hr>";

// Pengisian Dan Perkalian
$c = $a *= 2;
$a = 32;
echo "$a *= 2 : $c";
echo "<hr>";

// Pengisian Dan Pemangkatan
$c = $a**=2;
$a = 32;
echo "$a **= 2 : $c";
echo "<hr>";

// Pengisian Dan Pembagian
$c = $a /= 2;
$a = 32;
echo "$a /= 2 : $c";
echo "<hr>";

// Pengisian Dan Sisa bagi
$c = $a %= 2;
$a = 32;
echo "$a %= 2 : $c";
echo "<hr>";

// Pengisian Dan Penggabungan(String)
$c = $a .= 2;
$a = 32;
echo "$a .= 2 : $c";
echo "<hr>";

$speed = 83;

// ini operator aritmatika
$speed = $speed + 10;
echo "$speed <hr>";
// maka nilai speed akan sama dengan 83 + 10 =93

// ini operator penugasan
$speed += 10;
echo "$speed <hr>";

// sekarang nilai speed akan menjadi 93 + 10 = 103