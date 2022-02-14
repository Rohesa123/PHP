<?php
// Membuat array
$barang = ["Buku Tulis", "Penghapus", "Spiidol"];

// Menampilkan isi array dengan perulangan for
for ($i = 0; $i < count($barang); $i++) {
    echo $barang[$i] . "<br>";
}

echo "<hr>";

// Menampilkan isi array dengan perulangan foreach
foreach ($barang as $barang_1) {
    echo $barang_1 . "<br>";
}

echo "<hr>";

// Menampilkan isi array dengan perulangan while
$i = 0;
while ($i < count($barang)) {
    echo $barang[$i] . "<br>";
    $i++;
}
