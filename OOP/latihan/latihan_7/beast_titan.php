<?php

require "titan.php";

class BeastTitan extends Titan
{
    function lempar() {
        return "wush... wush";
    }

    public function aksi()
    {
        echo "Level Point Beast Titan : $this->pointPower";
        echo "sifat dari Beast Titan {$this->terjang}";
    }
}
