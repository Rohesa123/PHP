<?php

class Komputer
{
    public $merk, $processor, $memori;

    public function beliKomputer()
    {
        return "Beli Komputer Baru";
    }
}

class Laptop extends Komputer
{
    public function lihatSpec()
    {
        return "Merk : $this->merk, Processor : $this->processor, Memori : $this->memori";
    }
}

// * Buat objek laptop
$laptop = new Laptop();
// * set property laptop dari komputer
$laptop->merk = "Asus";
$laptop->processor = "Intel Core I5";
$laptop->memori = "4Gb";

echo $laptop->beliKomputer()."<br>";
echo $laptop->lihatSpec();