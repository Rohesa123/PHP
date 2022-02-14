<?php
// Array asosiatif adalah array yang indeksnya tidak menggunakan nomer atau angka
// Indeks array asosiatif berbentuk kata kunci

// Membuat array asosiatif
$artikel = [
    "Judul" => "Belajar Pemrograman PHP",
    "Penulis" => "Petanikode",
    "View" => 128
];

echo "<h2>" . $artikel['Judul'] . "</h2>";
echo "<p>Oleh : " . $artikel['Penulis'] . "</p>";
echo "<p>View : " . $artikel['View'] . "</p>";

// Pada array asosiatif, kita menggunakan tanda => untuk mengasosiasikan sebuah kata kunci dengan isi array
// Selain menggunakan tanda =>, kita juga bisa membuat array asosiatif seperti ini :

// Membuat array asosiatif
$email["Subjek"] = "Apa Kabar ?";
$email["Pengirim"] = "rohesa@gmail.com";
$email["Isi"] = "Apa Kabar ? Sudah Lama Tidak Berjumpa";

echo "<pre>";
print_r($email);
echo "</pre>";
