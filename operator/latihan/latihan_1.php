<?php

// Variabel untuk menyimpan gaji kotor
$gk = 4500000;
$gk1 = $gk;

// Variabel untuk potongan BPJS
$bpjs = 200000;

// Variabel untuk Infaq
$infaq = 50000;

// Variabel untuk uang transport
$ut = 10000;


// Perhitungan
// Menghitung pajak
$pajak = $gk * 2.5;
$pajak /= 100;

// Menghitung Gaji kotor dikurang pajak
$gk -= $pajak;

// Menghitung Potongan BPJS
$gk -= $bpjs;

// Menghitung potongan infaq
$gk -= $infaq;

// Menghtung uang transport
$ut *= 24;

// Menghitung Gaji Bersih 
$gb = $gk + $ut;

echo "Gaji Kotor yang diterima Haddad Rp. $gk1<br>";
echo "Jumlah Pajak Rp. $pajak<br>";
echo "Jumlah potongan BPJS Rp. $bpjs<br>";
echo "Uang yang di infaq kan haddad tiap bulan Rp. $infaq<br>";
echo "Jumlah uang Transport yang diterima haddad Rp. $ut<br><hr>";
echo "Jadi Gaji Yang Diterima Haddah Adalah Rp. $gb";