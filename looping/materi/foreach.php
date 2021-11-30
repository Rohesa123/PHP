<?php

$books = [
    "Panduan Belajar PHP untuk pemula",
    "Membangun Aplikasi Web dengan PHP",
    "Tutorial PHP dan MYSQL",
    "Membuat Chat Bot dengan PHP"
];

echo "<h5>Judul Buku PHP : </h5>";
echo "<ul>";
foreach($books as $buku) {
    echo "<li>$buku</li>";
}
echo "</ul>";