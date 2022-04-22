<?php

class Nilai
{
    private $nis, $nama, $jurusan, $kelas, $jrsn, $tingkatan;
    protected $rataRata = [0.15, 0.2, 0.4, 0.25];

    public function __construct($a, $b, $c, $d, $e)
    {
        $this->nis = $a;
        $this->nama = $b;
        $this->kelas = $c;
        $this->jrsn = $d;
        $this->tingkatan = $e;

        if ($d == "RPL") {
            $this->jurusan = "Rekayasa Perangkat Lunak";
        } else if ($d == "TBSM") {
            $this->jurusan = "Teknik Bisnis Sepeda Motor";
        } else if ($d == "TKRO") {
            $this->jurusan = "Teknik Kendaraan Ringan Otomotif";
        }
    }

    public function getNis()
    {
        return $this->nis;
    }
    public function getNama()
    {
        return $this->nama;
    }
    public function getJurusan()
    {
        return $this->jurusan;
    }
    public function getKelas()
    {
        return "$this->kelas $this->jrsn $this->tingkatan";
    }
}

class NilaiIndo extends Nilai
{
    public $nilai;

    public function __construct($a)
    {
        $this->nilai = $a;
    }
    public function nilaiAkhir()
    {
        for ($i = 0; $i < count($this->nilai); $i++) {
            $Nilai[$i] = $this->nilai[$i] * $this->rataRata[$i];
        }

        return ($Nilai[0] + $Nilai[1] + $Nilai[2] + $Nilai[3]);
    }
}

class NilaiInggris extends Nilai
{
    public $nilai;

    public function __construct($a)
    {
        $this->nilai = $a;
    }
    public function nilaiAkhir()
    {
        for ($i = 0; $i < count($this->nilai); $i++) {
            $Nilai[$i] = $this->nilai[$i] * $this->rataRata[$i];
        }

        return ($Nilai[0] + $Nilai[1] + $Nilai[2] + $Nilai[3]);
    }
}

class NilaiMTK extends Nilai
{
    public $nilai;

    public function __construct($a)
    {
        $this->nilai = $a;
    }
    public function nilaiAkhir()
    {
        for ($i = 0; $i < count($this->nilai); $i++) {
            $Nilai[$i] = $this->nilai[$i] * $this->rataRata[$i];
        }

        return ($Nilai[0] + $Nilai[1] + $Nilai[2] + $Nilai[3]);
    }
}

class NilaiProduktif extends Nilai
{
    public $nilai;

    public function __construct($a)
    {
        $this->nilai = $a;
    }
    public function nilaiAkhir()
    {
        for ($i = 0; $i < count($this->nilai); $i++) {
            $Nilai[$i] = $this->nilai[$i] * $this->rataRata[$i];
        }

        return ($Nilai[0] + $Nilai[1] + $Nilai[2] + $Nilai[3]);
    }
}
