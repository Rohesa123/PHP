<?php

$kelas = [
    [
        "Nama" => "Rohesa",
        "Kelas" => "XI RPL 3",
        "Umur" => 16,
        "Hobi" => [
            ["Hobi_Saya" => "Bermain Game"],
            ["Hobi_Saya" => "Bermain Badminton"],
        ],
    ],
    [
        "Nama" => "Sidiq",
        "Kelas" => "XI RPL 3",
        "Umur" => 16,
        "Hobi" => [
            ["Hobi_Saya" => "Mancing"],
            ["Hobi_Saya" => "Bermain Basket"],
        ],
    ],
    [
        "Nama" => "Permana",
        "Kelas" => "XI RPL 3",
        "Umur" => 16,
        "Hobi" => [
            ["Hobi_Saya" => "Bermain Sepeda"],
            ["Hobi_Saya" => "Ngoding"],
        ],
    ],
];

foreach ($kelas as $data_kelas) {
    echo "Nama Saya : " . $data_kelas['Nama'] . "<br>";
    echo "Saya Kelas : " . $data_kelas['Kelas'] . "<br>";
    echo "Umur : " . $data_kelas['Umur'] . "<br>";
    echo "Hobi Saya : ";
    foreach ($data_kelas['Hobi'] as $hobi) {
        echo "<li>";
        echo $hobi['Hobi_Saya'];
        echo "</li>";
    }
    echo "<hr>";
}
