<?php
// Membuat array kosong
$buah = array();
$hobi = [];

// Membuat array sekaligus mengisinya
$minuman = array("Kopi", "Teh", "Jus Jeruk");
$makanan = ["Nasi Goreng", "Soto", "Bubur"];

// Membuat array dengan mengisi indeks tertentu
$anggota[1] = "Sidiq";
$anggota[2] = "Permana";
$anggota[0] = "Rohesa";

// array bisa di isi dengan tipe data apa saja
$item = ["Rohesa", 7, 2.5, true];

// Menampilkan array
echo $anggota[0] . " " . $anggota[1] . " " . $anggota[2] . '<br>';
print_r($minuman);
