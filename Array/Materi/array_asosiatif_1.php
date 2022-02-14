<?php
$siswa = [
    [
        "Nama" => "Bayu",
        "Kelas" => "11 RPL 1",
    ],
    [
        "Nama" => "Adila",
        "Kelas" => "11 RPL 2",
    ],
    [
        "Nama" => "Adrian",
        "Kelas" => "11 RPL 3",
    ],
];

foreach ($siswa as $data) {
    echo "Nama Siswa : " . $data['Nama'];
    echo "<br>Kelas : " . $data['Kelas'];
    echo "<hr>";
}
