<?php

class Ciptaan
{
    public $jenisMakhluk, $tugasnya;

    public function jenis()
    {
        return $this->jenisMakhluk;
    }

    public function tugas()
    {
        if ($this->jenisMakhluk == "Manusia" || $this->jenisMakhluk == "Malaikat") {
            $tugas = "Beribadah Kepada Tuhan";
        } else if ($this->jenisMakhluk == "Jin") {
            $tugas = "Ada dua jenis ada yang taat beribadah dan juga ada yang sesat tugasnya sama seperti setan";
        } else if ($this->jenisMakhluk == "Setan") {
            $tugas = "Menggangu Manusia";
        }

        return ($this->tugasnya = $tugas);
    }
}

class Makhluk extends Ciptaan
{
    public function __construct($jenisMakhluk)
    {
        $this->jenisMakhluk = $jenisMakhluk;
    }
}
