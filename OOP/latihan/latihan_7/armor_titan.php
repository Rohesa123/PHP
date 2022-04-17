<?php

require_once "titan.php";

class ArmorTitan extends Titan
{
    public function terjang()
    {
        return "dush... dush...";
    }

    public function aksi()
    {
        echo "Level Point Armor : $this->powerPoint<br>";
        echo "sifat dari Armor Titan {$this->terjang()}";
    }
}
