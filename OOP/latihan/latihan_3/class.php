<?php

class Aritmatika
{
    public $bil1;
    public $bil2;

    public function __construct($a=0, $b=0)
    {
        $this->bil1 = $a;
        $this->bil2 = $b;
    }

    public function penjumlahan()
    {
        return ($this->bil1 + $this->bil2);
    }

    public function pengurangan()
    {
        return ($this->bil1 - $this->bil2);
    }

    public function perkalian()
    {
        return ($this->bil1 * $this->bil2);
    }

    public function pembagian()
    {
        return ($this->bil1 / $this->bil2);
    }

    public function modulus()
    {
        return ($this->bil1 % $this->bil2);
    }

    public function hasil()
    {
        echo "Hasil Penjumlahan {$this->bil1} + {$this->bil2} = {$this->penjumlahan()}<br>";
        echo "Hasil Pengurangan {$this->bil1} - {$this->bil2} = {$this->pengurangan()}<br>";
        echo "Hasil Perkalian {$this->bil1} x {$this->bil2} = {$this->perkalian()}<br>";
        echo "Hasil Pembagian {$this->bil1} / {$this->bil2} = {$this->pembagian()}<br>";
        echo "Hasil Modulus {$this->bil1} % {$this->bil2} = {$this->perkalian()}<br>";

    }
}
