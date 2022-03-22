<?php

// class
class manusia
{

    // property/attribut
    public $warna;
    public $tinggi;

    // method
    public function makan()
    {
        echo "Manusia suka makan Nasi + Mie";
    }
    public function minum()
    {
        echo "Manusia suka minum air Mineral";
    }
}

// object
$rohesa = new manusia();
$rohesa->warna="Coklat";
$rohesa->tinggi="190";
var_dump($rohesa);