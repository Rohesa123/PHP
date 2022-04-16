<?php

require "titan.php";

class AttackTitan extends Titan
{
    public function punch()
    {
        return "blam... blam...";
    }

    public function aksi()
    {
        echo "Level Point Attack Titan : $this->pointPower";
        echo "sifat dari Armor Titan {$this->terjang}";
    }
}
