<?php
class Gofud
{
    public $nama_barang, $harga, $jumlah_pesanan, $sistem_pembayaran;

    public function __construct($a = "-", $b = 0, $c = "-")
    {
        $this->nama_barang = $a;
        $this->jumlah_pesanan = $b;
        $this->sistem_pembayaran = $c;
        
        if ($a == "Martabak") {
            $this->harga = 35000;
        } else if ($a == "Krabby Patty") {
            $this->harga = 15000;
        } else if ($a == "Kwetiaw") {
            $this->harga = 25000;
        } else if ($a == "Steak") {
            $this->harga = 45000;
        } else if ($a == "Nasi Goreng") {
            $this->harga = 20000;
        } else {
            $this->harga = 0;
        }
    }

    public function totalHarga()
    {
        return ($this->jumlah_pesanan * $this->harga);
    }

    public function getDiscount()
    {
        if ($this->totalHarga() > 150000 && $this->totalHarga() <= 250000) {
            $diskon = 0.1;
        } else if ($this->totalHarga() > 250000) {
            $diskon = 0.15;
        } else {
            $diskon = 0;
        }

        return $diskon;
    }

    public function getCashback()
    {
        if ($this->sistem_pembayaran == "Cash") {
            $cashback = 0;
        } else if ($this->sistem_pembayaran == "M-Banking") {
            $cashback = 0.025;
        } else if ($this->sistem_pembayaran == "Gopay") {
            $cashback = 0.1;
        } else if ($this->sistem_pembayaran == "PickUp") {
            $cashback = 0.015;
        }

        return $cashback;
    }

    public function totalPembayaran()
    {
        return ($this->totalHarga()-(($this->getDiscount() + $this->getCashback()) * $this->totalHarga()));
    }

}
