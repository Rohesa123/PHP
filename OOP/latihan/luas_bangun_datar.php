<?php

class luasBD
{
    public function pesergi($sisi = 0)
    {
        $luas = $sisi * $sisi;

        return $luas;
    }
    public function pesergiP($panjang = 0, $lebar = 0)
    {
        $luas = $panjang * $lebar;

        return $luas;
    }
    public function segitiga($alas = 0, $tinggi = 0)
    {
        $luas = 0.5 * ($alas * $tinggi);

        return $luas;
    }
    public function lingkaran($jari_jari)
    {
        $luas = 3.14 * ($jari_jari * $jari_jari);

        return $luas;
    }
}

$hitung = new luasBD();

echo "Luas Pesergi Adalah = " . $hitung->pesergi(5);
echo "<hr>";
echo "Luas Pesergi Panjang Adalah = " . $hitung->pesergiP(10, 8);
echo "<hr>";
echo "Luas Segitiga Adalah = " . $hitung->segitiga(10, 12);
echo "<hr>";
echo "Luas Lingkaran Adalah = " . $hitung->lingkaran(14);
