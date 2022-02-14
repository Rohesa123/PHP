<?php
// Array multi dimensi adalah array yang memiliki dimensi lebih dari satu
// Biasanya digunakan untuk membuat matrik, graph, dan struktur data rumit lainnya.

// Ini adalah array dua dimensi
$matrik = [
    [2, 3, 4],
    [7, 5, 0],
    [4, 3, 8],
];

// Cara mengakses isinya
echo $matrik[1][0]; // -> output : 7

// Membuat array 2 dimensi yang berisi array asosiatif
$artikel = [
    [
        "Judul" => "Belajar PHP & MYSQl Untuk Pemula",
        "Penulis" => "petanikode",
    ],
    [
        "Judul" => "Tutorial PHP Dari Nol Hingga Akhir",
        "Penulis" => "petanikode",
    ],
    [
        "Judul" => "Membuat Aplikasi Web Dengan PHP",
        "Penulis" => "petanikode",
    ],
];

// Menampilkan array
foreach ($artikel as $post) {
    echo "<h2>" . $post['Judul'] . "</h2>";
    echo "<p>" . $post['Penulis'] . "</p>";
    echo "<hr>";
}
