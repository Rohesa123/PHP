
<?php

class Hewan
{
    public $warna = "Coklat";

    public function makan()
    {
        return "Saya makan";
    }

    public function bernafas()
    {
        return "Saya Bernafas";
    }
}

// * class kucing pewarisan dari class Hewan
// * child class
class Kucing extends Hewan
{
    function bernafas() {
        return "Saya bernafas mengunakan paru-paru";
    }
}

$kucing = new Kucing();

echo $kucing->warna."<br>";
echo $kucing->makan()."<br>";
echo $kucing->bernafas();