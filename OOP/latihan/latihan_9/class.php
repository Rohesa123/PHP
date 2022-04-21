<?php

class Nilai
{
    protected $nis, $nama, $jurusan, $kelas, $jrsn, $tingkatan;

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
        $Nilai[0] = $this->nilai[0] * 0.15;
        $Nilai[1] = $this->nilai[1] * 0.2;
        $Nilai[2] = $this->nilai[2] * 0.4;
        $Nilai[3] = $this->nilai[3] * 0.25;

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
        $Nilai[0] = $this->nilai[0] * 0.15;
        $Nilai[1] = $this->nilai[1] * 0.2;
        $Nilai[2] = $this->nilai[2] * 0.4;
        $Nilai[3] = $this->nilai[3] * 0.25;

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
        $Nilai[0] = $this->nilai[0] * 0.15;
        $Nilai[1] = $this->nilai[1] * 0.2;
        $Nilai[2] = $this->nilai[2] * 0.4;
        $Nilai[3] = $this->nilai[3] * 0.25;

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
        $Nilai[0] = $this->nilai[0] * 0.15;
        $Nilai[1] = $this->nilai[1] * 0.2;
        $Nilai[2] = $this->nilai[2] * 0.4;
        $Nilai[3] = $this->nilai[3] * 0.25;

        return ($Nilai[0] + $Nilai[1] + $Nilai[2] + $Nilai[3]);
    }

}
