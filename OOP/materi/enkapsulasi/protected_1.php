<?php

// * buat class laptop
class laptop
{

    // * buat protected property
    protected $pemilik;

    // * buat protected method
    protected function hidupkan_laptop()
    {
        return "Hidupkan Laptop";
    }
}

// * buat objek dari class laptop (instansiasi)
$laptop_rohesa = new laptop();

// * set protected property akan menghasilkan error
$laptop_rohesa->pemilik = "Rohesa";
// ! Fatal error : Cannot acces protected property laptop::$pemilik

// * tampilkan protected property akan menghasilkan error
echo $laptop_rohesa->pemilik;
// ! Fatal error : Cannot acces protected property laptop::$pemilik

echo "<br>";

// * jalankan protected method akan menghasilkan error
echo $laptop_rohesa->hidupkan_laptop();
// ! Fatal error : Call to protected method laptop::hidupkan_lapto()
