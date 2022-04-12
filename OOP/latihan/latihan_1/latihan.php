<?php

class Laptop
{
    public $warna = "-", $merk = "-", $processor = "-";

    public function infoLaptop()
    {
        return "Warna Laptop : " . $this->warna . "<br>Merk Laptop : " . $this->merk . "<br>Processor Laptop : " . $this->processor;
    }

    public function hidupkanLaptop()
    {
        return "Laptop Menyala";
    }

    public function matikanLaptop()
    {
        return "Laptop Mati";
    }
}

$laptop1 = new Laptop();
$laptop1->warna = "Hitam";
$laptop1->merk = "HP";
$laptop1->processor = "AMD RYZEN 5";

echo $laptop1->infoLaptop() . "<br>";
echo $laptop1->hidupkanLaptop() . "<hr>";

$laptop2 = new Laptop();
$laptop2->warna = "Putih";
$laptop2->merk = "Lenovo";
$laptop2->processor = "Intel Core-i5";

echo $laptop2->infoLaptop() . "<br>";
echo $laptop2->matikanLaptop() . "<hr>";

$laptop3 = new Laptop();
$laptop3->warna = "Hitam";
$laptop3->merk = "Asus";
$laptop3->processor = "AMD RYZEN 3";

echo $laptop3->infoLaptop() . "<br>";
echo $laptop3->hidupkanLaptop() . "<hr>";