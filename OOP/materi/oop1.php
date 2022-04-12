<?php

// * Mendefinisikan sebuah Class
class Kucing
{

    // * Membuat property atau attributtes
    public $warna = "Coklat";
    public $jumlahKaki = 4;
    public $jenisBulu = "Panjang";
    public $makananFavorit = "Ikan";

    // * Membuat method atau (Behaviour)
    public function bersuara()
    {
        return "Meowng ... meowng ... meowng";
    }

    public function berburu()
    {
        return "Berburu Ikan";
    }
}

// * Membuat Objek (Inisiasi Objek)
$kucing1 = new Kucing();
echo "Warna Kucing : " . $kucing1->warna . "<br>";
echo "Sifat Kucing : " . $kucing1->bersuara() . "<hr>";

$kucing2 = new Kucing();
// * set Warna Kucing
$kucing2->warna = "Oren";
echo "Warna Kucing : " . $kucing2->warna . "<br>";
echo "Sifat Kucing : " . $kucing2->berburu() . "<hr>";
