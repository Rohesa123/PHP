<?php

// * Membuat class laptop
class laptop
{

    // * buat public property
    public $pemilik;

    // * buat public method
    public function hidupkan_laptop()
    {
        return "Hidupkan Laptop";
    }
}

// * buat objek dari class laptop (instansiasi)
$laptop_rohesa = new laptop();

// * set property
$laptop_rohesa->pemilik = "Rohesa";

// * tampilkan property
echo $laptop_rohesa->pemilik; // * Rohesa

echo "<br>";

// * tampilkan method
echo $laptop_rohesa->hidupkan_laptop(); // * "Hidupkan Laptop"
