<?php

// * buat class laptop
class laptop
{

    // * buat protected property
    protected $pemilik = "Rohesa";

    public function nama_p($nama)
    {
        return $this->pemilik = $nama;
    }
    public function akses_pemilik()
    {
        return $this->pemilik;
    }
    protected function hidupkan_laptop()
    {
        return "Hidupkan Laptop";
    }
    public function paksa_hidup()
    {
        return $this->hidupkan_laptop();
    }
}

// * buat objek dari class laptop (instansiasi)
$laptop_rohesa = new laptop();

// * set property
$laptop_rohesa->nama_p("Sidiq");

// * jalankan method akses_pemilik()
echo $laptop_rohesa->akses_pemilik(); // * Sidiq

echo "<br>";

// * jalankan method paksa_hidup()
echo $laptop_rohesa->paksa_hidup();
