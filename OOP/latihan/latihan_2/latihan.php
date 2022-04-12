<?php

class Komputer
{
    public $namaPemilik, $merk, $ukuranLayar;

    public function __construct($namaPemilik = "-", $merk = "-", $ukuranLayar = "-")
    {
        $this->namaPemilik = $namaPemilik;
        $this->merk = $merk;
        $this->ukuranLayar = $ukuranLayar;
    }

    public function infoKomputer()
    {
        return "Pemilik Komputer : " . $this->namaPemilik . "<br>Merk Komputer : " . $this->merk . "<br>Ukuran Layar Komputer : " . $this->ukuranLayar;
    }

    public function hidupkanKomputer()
    {
        return "Komputer Menyala";
    }

    public function matikanKomputer()
    {
        return "Komputer Mati";
    }
}

$komputer1 = new Komputer("Rohesa", "HP", "1800 x 1200");
echo $komputer1->infoKomputer()."<br>";
echo "Status : ".$komputer1->hidupkanKomputer()."<hr>";

$komputer2 = new Komputer("Sidiq", "Asus", "1600 x 1000");
echo $komputer2->infoKomputer()."<br>";
echo "Status : ".$komputer2->matikanKomputer()."<hr>";

$komputer3 = new Komputer("Permana", "Lenovo", "1700 x 1200");
echo $komputer3->infoKomputer()."<br>";
echo "Status : ".$komputer3->hidupkanKomputer()."<hr>";

$komputer4 = new Komputer("Budi", "HP", "2000 x 1400");
echo $komputer4->infoKomputer()."<br>";
echo "Status : ".$komputer4->hidupkanKomputer()."<hr>";

$komputer5 = new Komputer("Sandi", "HP", "1800 x 1200");
echo $komputer5->infoKomputer() . "<br>";
echo "Status : " . $komputer5->matikanKomputer(). "<hr>";
