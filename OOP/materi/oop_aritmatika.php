<?php

class Aritmatika
{
    public $bil1 = 0, $bil2 = 0;

    public function pertambahan()
    {
        $hasil = $this->bil1 + $this->bil2;
        return $hasil;
    }

    public function pengurangan()
    {
        $hasil = $this->bil1 - $this->bil2;
        return $hasil;
    }

    public function perkalian()
    {
        $hasil = $this->bil1 * $this->bil2;
        return $hasil;
    }

    public function pembagian()
    {
        $hasil = $this->bil1 / $this->bil2;
        return $hasil;
    }

    public function modulus()
    {
        $hasil = $this->bil1 % $this->bil2;
        return $hasil;
    }
}

$hitung1 = new Aritmatika();
$hitung1->bil1=10;
$hitung1->bil2=15;

echo "Hasil Dari $hitung1->bil1 + $hitung1->bil2 = {$hitung1->pertambahan()}<hr>";

$hitung2 = new Aritmatika();
$hitung2->bil1=20;
$hitung2->bil2=5;

echo "Hasil Dari $hitung2->bil1 - $hitung2->bil2 = {$hitung2->pengurangan()}<hr>";

$hitung3 = new Aritmatika();
$hitung3->bil1 = 5;
$hitung3->bil2 = 5;

echo "Hasil Dari $hitung3->bil1 * $hitung3->bil2 = {$hitung3->perkalian()}<hr>";

$hitung4 = new Aritmatika();
$hitung4->bil1 = 30;
$hitung4->bil2 = 15;

echo "Hasil Dari $hitung4->bil1 / $hitung4->bil2 = {$hitung4->pembagian()}<hr>";

$hitung5 = new Aritmatika();
$hitung5->bil1 = 10;
$hitung5->bil2 = 3;

echo "Hasil Dari $hitung5->bil1 % $hitung5->bil2 = {$hitung5->modulus()}<hr>";
