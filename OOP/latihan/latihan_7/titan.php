<?php

class Titan
{
    public $powerPoint;

    public function __construct($a)
    {
        $this->powerPoint = $a;
    }

}

require_once "armor_titan.php";
require_once "attack_titan.php";
require_once "beast_titan.php";
require_once "human.php";