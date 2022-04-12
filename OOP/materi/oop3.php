<?php

// * mendefinisikan class Kucing

class Kucing
{

    // * Membuat Property Warna
    public $warna="Merah";

    // * construct adalah method khusus yang akan
    // * dipanggil pertama kali
    public function __construct($a)
    {
        $this->warna = $a;
    }

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

// * Membuat object (inisiasi object)
$kucing1 = new Kucing("Hitam");
echo "Warna Kucing 1 : $kucing1->warna <br>";

$kucing2 = new Kucing("Oren");
echo "Warna Kucing 2 : $kucing2->warna <br>";
