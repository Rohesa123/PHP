<?php
    class Kucing
    {
        public $warna, $nama, $jenisKelamin;

        public function __construct($a, $b, $c)
        {
            $this->warna = $a;
            $this->nama = $b;
            $this->jenisKelamin = $c;
        }

        public function dataKucing()
        {
            return "Nama : $this->nama<br>Warna : $this->warna<br>Jenis Kelamin : $this->jenisKelamin";
        }
    }
