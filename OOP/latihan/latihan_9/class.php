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
    private $nilaiK, $nilaiT, $nilaiA, $nilaiU;

    public function __construct($a, $b, $c, $d)
    {
        $this->nilaiK = $a;
        $this->nilaiT = $b;
        $this->nilaiA = $c;
        $this->nilaiU = $d;
    }

    public function nilaiAkhir()
    {
        $NilaiK = $this->nilaiK * 0.15;
        $NilaiT = $this->nilaiT * 0.2;
        $NilaiA = $this->nilaiA * 0.4;
        $NilaiU = $this->nilaiU * 0.25;

        return ($NilaiK + $NilaiT + $NilaiA + $NilaiU);
    }

    public function getNilaiK()
    {
        return $this->nilaiK;
    }

    public function getNilaiT()
    {
        return $this->nilaiT;
    }

    public function getNilaiA()
    {
        return $this->nilaiA;
    }

    public function getNilaiU()
    {
        return $this->nilaiU;
    }
}

class NilaiInggris extends Nilai
{
    private $nilaiK, $nilaiT, $nilaiA, $nilaiU;

    public function __construct($a, $b, $c, $d)
    {
        $this->nilaiK = $a;
        $this->nilaiT = $b;
        $this->nilaiA = $c;
        $this->nilaiU = $d;
    }

    public function nilaiAkhir()
    {
        $NilaiK = $this->nilaiK * 0.15;
        $NilaiT = $this->nilaiT * 0.2;
        $NilaiA = $this->nilaiA * 0.4;
        $NilaiU = $this->nilaiU * 0.25;

        return ($NilaiK + $NilaiT + $NilaiA + $NilaiU);
    }

    public function getNilaiK()
    {
        return $this->nilaiK;
    }

    public function getNilaiT()
    {
        return $this->nilaiT;
    }

    public function getNilaiA()
    {
        return $this->nilaiA;
    }

    public function getNilaiU()
    {
        return $this->nilaiU;
    }
}

class NilaiMTK extends Nilai
{
    private $nilaiK, $nilaiT, $nilaiA, $nilaiU;

    public function __construct($a, $b, $c, $d)
    {
        $this->nilaiK = $a;
        $this->nilaiT = $b;
        $this->nilaiA = $c;
        $this->nilaiU = $d;
    }

    public function nilaiAkhir()
    {
        $NilaiK = $this->nilaiK * 0.15;
        $NilaiT = $this->nilaiT * 0.2;
        $NilaiA = $this->nilaiA * 0.4;
        $NilaiU = $this->nilaiU * 0.25;

        return ($NilaiK + $NilaiT + $NilaiA + $NilaiU);
    }

    public function getNilaiK()
    {
        return $this->nilaiK;
    }

    public function getNilaiT()
    {
        return $this->nilaiT;
    }

    public function getNilaiA()
    {
        return $this->nilaiA;
    }

    public function getNilaiU()
    {
        return $this->nilaiU;
    }
}

class NilaiProduktif extends Nilai
{
    private $nilaiK, $nilaiT, $nilaiA, $nilaiU;

    public function __construct($a, $b, $c, $d)
    {
        $this->nilaiK = $a;
        $this->nilaiT = $b;
        $this->nilaiA = $c;
        $this->nilaiU = $d;
    }

    public function nilaiAkhir()
    {
        $NilaiK = $this->nilaiK * 0.15;
        $NilaiT = $this->nilaiT * 0.2;
        $NilaiA = $this->nilaiA * 0.4;
        $NilaiU = $this->nilaiU * 0.25;

        return ($NilaiK + $NilaiT + $NilaiA + $NilaiU);
    }

    public function getNilaiK()
    {
        return $this->nilaiK;
    }

    public function getNilaiT()
    {
        return $this->nilaiT;
    }

    public function getNilaiA()
    {
        return $this->nilaiA;
    }

    public function getNilaiU()
    {
        return $this->nilaiU;
    }
}
