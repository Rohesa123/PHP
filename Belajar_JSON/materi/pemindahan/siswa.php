<?php

// File JSON yang akan dibaca
$file = "siswa.json";

// Mendapatkan file json
$siswa = file_get_contents($file);

// Mencode siswa$siswa.json 
$data = json_decode($siswa,true);

// Menampilkan data array menggunakan foreach
foreach ($data as $d) {
    echo "No : ".$d['No']."<br>";
    echo "Nama : ".$d['Nama']."<br>";
    echo "Jurusan : ".$d['Jurusan']."<br>";
    echo "<hr>";
}