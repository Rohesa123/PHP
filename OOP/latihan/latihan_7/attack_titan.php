<?php

require_once "./titan.php";

class AttackTitan extends Titan
{
    public function punch()
    {
        return "blam... blam...";
    }

    public function aksi()
    {
        echo "Level Point Attack Titan : $this->powerPoint<br>";
        echo "sifat dari Attack Titan {$this->punch()}";
    }
}
