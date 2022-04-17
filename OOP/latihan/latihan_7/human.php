<?php

require_once "titan.php";

class Human extends Titan
{
    public function killAllTitan()
    {
        return "Sasageyo... Shinzuo Sasageyo...";
    }

    public function aksi()
    {
        echo "Level Point Human : $this->powerPoint<br>";
        echo "sifat dari Human {$this->killAllTitan()}";
    }
}
