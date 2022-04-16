<?php

class Hewan
{
    public $nama_hewan, $makan, $warna, $hidup;

    public function __construct($a, $b, $c, $d)
    {
        $this->nama_hewan = $a;
        $this->makan = $b;
        $this->warna = $c;
        $this->hidup = $d;
    }

    public function namaHewan()
    {
        return "Saya Adalah";
    }

    public function makan()
    {
        return "Saya Makan";
    }

    public function warna()
    {
        return "Saya Berwarna";
    }

    public function hidup()
    {
        return "Saya Hidup Di";
    }
}

class Burung extends Hewan
{
    public function identitas()
    {
        echo "{$this->namaHewan()} Burung $this->nama_hewan<br>";
        echo "{$this->makan()} $this->makan<br>";
        echo "{$this->warna()} $this->warna<br>";
        echo "{$this->hidup()} $this->hidup";
    }
}

class Kucing extends Hewan
{
    public function identitas()
    {
        echo "{$this->namaHewan()} Kucing $this->nama_hewan<br>";
        echo "{$this->makan()} $this->makan<br>";
        echo "{$this->warna()} $this->warna<br>";
        echo "{$this->hidup()} $this->hidup";
    }
}

class Ikan extends Hewan
{
    public function identitas()
    {
        echo "{$this->namaHewan()} Ikan $this->nama_hewan<br>";
        echo "{$this->makan()} $this->makan<br>";
        echo "{$this->warna()} $this->warna<br>";
        echo "{$this->hidup()} $this->hidup";
    }
}

$burung1 = new Burung("Kenari", "Biji-Bijian", "Hijau", "Darat dan Udara");
$burung1->identitas();
echo "<hr>";

$kucing1 = new Kucing("Anggora","Ikan","Hitam","Darat");
$kucing1->identitas();
echo "<hr>";

$ikan1 = new Ikan("Mas","Pelet","kuning","Air");
$ikan1->identitas();
echo "<hr>";
