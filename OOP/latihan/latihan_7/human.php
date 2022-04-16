<?php

require "titan.php";

class Human extends Titan
{
    public function killAllTitan()
    {
        return "Sasageyo... Shinzuo Sasageyo...";
    }

    public function aksi()
    {
        echo "Level Point Human : $this->pointPower";
        echo "sifat dari Human {$this->terjang}";
    }
}
