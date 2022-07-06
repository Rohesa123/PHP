<?php

class Warung
{

    // Hak Akses protected hak akses yang hanya bisa di akses oleh
    // class itu sendiri atau class turunannya tapi tidak bisa
    // diakses di luar class
    protected $harga = 0, $diskon = 0;

    // Hak akses private hak akses yang hanya bisa di akses oleh
    // class itu sendiri dan tidak bisa di akses oleh class turunannya
    // atau dari luar class
    private $nama_barang, $merk_barang;

    // Hak akses public hak akses yang bisa di akses di luar class
    // dan di class tersendiri ataupun class turunannya
    public function __construct($harga, $diskon, $nama_barang, $merk_barang)
    {
        $this->harga = $harga;
        $this->diskon = $diskon;
        $this->nama_barang = $nama_barang;
        $this->merk_barang = $merk_barang;
    }

    public function getInfo()
    {
        return "Nama : {$this->nama_barang}, Merk : {$this->merk_barang}";
    }
}

class Makanan extends Warung
{
    protected $jumlah_barang;

    public function __construct($harga, $diskon, $nama_barang, $merk_barang, $jumlah)
    {
        Parent::__construct($harga, $diskon, $nama_barang, $merk_barang);

        $this->jumlah_barang = $jumlah;
    }

    public function getInfo()
    {
        return Parent::getInfo() . ", (Rp. " . (($this->harga * $this->jumlah_barang) - $this->diskon) . ") Stok : {$this->jumlah_barang}";
    }
}

class Minuman extends Warung
{
    protected $jumlah_barang;

    public function __construct($harga, $diskon, $nama_barang, $merk_barang, $jumlah)
    {
        Parent::__construct($harga, $diskon, $nama_barang, $merk_barang);

        $this->jumlah_barang = $jumlah;
    }

    public function getInfo()
    {
        return Parent::getInfo() . ", (Rp. " . (($this->harga * $this->jumlah_barang) - $this->diskon) . ") Stok : {$this->jumlah_barang}";
    }
}

$produk1 = new Makanan(10000,1000,"Potabe","Chiki",12);
$produk2 = new Minuman(1000,2000,"Ale-Ale","Water",30);

echo $produk1->getInfo();
echo "<br>";
echo $produk2->getInfo();
