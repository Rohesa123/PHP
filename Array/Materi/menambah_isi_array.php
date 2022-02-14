<?php
// Membuat array
$hobi = ["Membaca", "Menulis", "Ngeblog"];

// Menambahkan isi pada indeks ke-3
$hobi[3] = "Coding";

// Menambahkan isi pada indeks terakhir
$hobi[] = "Olahraga";

// Cetak array dengan perulangan
foreach ($hobi as $hobiku) {
    echo $hobiku . "<br>";
}

// Apabila kita menambahkan pada indeks yang sudah terisi, maka isinya akan ditindih dengan yang baru.

// Membuat array
$user = ["Rohesa", "Pratama", "Permana"];

// Mengsisi array pada indeks ke-1 ("Pratama")
$user[1] = "Sidiq";

// Mencetak isi array
echo "<pre>";
print_r($user);
echo "</pre>";
