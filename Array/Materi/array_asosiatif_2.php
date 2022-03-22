<?php

$siswa = [
    [
        "Nama" => "Rohesa Sidiq Permana",
        "Kelas" => "XI RPL 3",
        "Eskul" => [
            ["Nama_Eskul" => "Osis"],
            ["Nama_Eskul" => "English Community"],
        ],
    ],
    [
        "Nama" => "Virgi",
        "Kelas" => "XI RPL 3",
        "Eskul" => [
            ["Nama_Eskul" => "Osis"],
            ["Nama_Eskul" => "Pramuka"],
        ],
    ],
];

foreach ($siswa as $data) {
    echo "Nama Siswa : " . $data['Nama'] . "<br>";
    echo "Kelas : " . $data['Kelas'] . "<br>";
    echo "Daftar Eskul Yang Diikuti : ";
    echo "<ul>";
    foreach ($data['Eskul'] as $eskul) {
        echo "<li>" . $eskul['Nama_Eskul'] . "</li>";
    }
    echo "</ul>";
    echo "<hr>";
}
