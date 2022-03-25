<?php

// * buat class komputer
class komputer
{

    // * property dengan hak akses protected
    protected $jenis_processor = "Intel Core i7-4790 3.6Ghz";

    // * method dengan hak askses protected
    protected function hidupkan_laptop()
    {
        return "Hidupkan Laptop";
    }
}
z
// * buat class laptop
class laptop extends komputer
{
    public function tampilkan_processor()
    {
        return $this->jenis_processor;
    }
    public function paksa_hidup()
    {
        return $this->hidupkan_laptop();
    }
}

// * buat objek dari class laptop (instansiasi)
$laptop_baru = new laptop();

// * jalankan method
echo $laptop_baru->tampilkan_processor(); // * "Intel Core i7-4790 3.6Ghz"

echo "<br>";

// * jalankan method
echo $laptop_baru->paksa_hidup(); // * "Hidupkan Laptop"
