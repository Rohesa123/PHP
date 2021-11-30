<?php

// Buatan Saya
// $name = ["Rohesa","Robby","Wildan","Surya","Virgi"];
// $jki = ["L","L","L","L","L"];
// $old = [16,17,16,17,17];

// foreach($name as $data => $saya) {
//     echo "Nama : $name[$data]<br>";
//     echo "JK : $jki[$data]<br>";
//     echo "Usia : $old[$data] Tahun<br>";
//     echo "<hr>";
// }

// Buatan Bapak
$siswa = [
    ['nama' => 'Rohesa', 'jk' => 'Laki-laki', 'umur' => 16],
    ['nama' => 'Robby', 'jk' => 'Laki-laki', 'umur' => 17],
    ['nama' => 'Wildan', 'jk' => 'Laki-laki', 'umur' => 16],
    ['nama' => 'Surya', 'jk' => 'Laki-laki', 'umur' => 17],
    ['nama' => 'Surya', 'jk' => 'Laki-laki', 'umur' => 17],
];

foreach ($siswa as $value) {
    echo "Nama : " . $value['nama'] . "<br>";
    echo "Jenis kelamin : " . $value['jk'] . "<br>";
    echo "Umur : " . $value['umur'];
    echo "<hr>";
}
