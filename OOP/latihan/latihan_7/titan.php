<?php

class Titan
{
    public $powerPoint = 10;

    protected function point($a)
    {
        $this->powerPoint = $a;
    }
    public function __construct($a) {
        $this->point($a = 10);
    }
}
