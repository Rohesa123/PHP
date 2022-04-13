<?php

class Raport
{
    public $nama, $kelas, $nis, $mapel, $nilai_harian, $nilai_uts, $nilai_uas, $absensi;

    public function __construct($nama="-", $kelas="-", $nis=0, $mapel="-", $nilai_harian=0, $nilai_uts=0, $nilai_uas=0, $absensi=0)
    {
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->nis = $nis;
        $this->mapel = $mapel;
        $this->nilai_harian = $nilai_harian;
        $this->nilai_uts = $nilai_uts;
        $this->nilai_uas = $nilai_uas;
        $this->absensi = $absensi;
    }

    public function nilai_harian()
    {
        return ($this->nilai_harian * 0.45);
    }

    public function nilai_uts()
    {
        return ($this->nilai_uts * 0.20);
    }

    public function nilai_uas()
    {
        return ($this->nilai_uas * 0.20);
    }

    public function absensi()
    {
        return ($this->absensi * 0.15);
    }

    public function hasil()
    {
        return ($this->nilai_harian() + $this->nilai_uts() + $this->nilai_uas() + $this->absensi());
    }

    public function status()
    {
        if ($this->hasil() > 78) {
            return "Lulus";
        } else if ($this->hasil() <= 78) {
            return "Remedial";
        }
    }

    public function grade()
    {
        if ($this->hasil() >= 85 && $this->hasil() <= 100) {
            return "A";
        } else if ($this->hasil() >= 75 && $this->hasil() < 85) {
            return "B";
        } else if ($this->hasil() >= 60 && $this->hasil() < 75) {
            return "C";
        } else if ($this->hasil() >= 40 && $this->hasil() < 60) {
            return "D";
        } else if ($this->hasil() >= 0 && $this->hasil() < 40) {
            return "E";
        }
    }
}
