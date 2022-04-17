<?php

require_once "titan.php";

class BeastTitan extends Titan
{
    function lempar() {
        return "wush... wush";
    }

    public function aksi()
    {
        echo "Level Point Beast Titan : $this->powerPoint<br>";
        echo "sifat dari Beast Titan {$this->lempar()}";
    }
}
