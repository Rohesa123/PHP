<?php

class Pembalap
{
    public $name, $team_name, $sponsor, $speed_bike, $health;

    public function __construct($name = "-", $team_name = "-", $sponsor = "-", $speed_bike = 0, $health = 0)
    {
        $this->name = $name;
        $this->team_name = $team_name;
        $this->sponsor = $sponsor;
        $this->speed_bike = $speed_bike;
        $this->health = $health;
    }

    public function kecepatan()
    {
        if ($this->speed_bike >= 1 && $this->speed_bike <= 100) {
            return "Speed Bike Normal";
        } else {
            return "Speed Bike Anda Tidak Valid";
        }
    }

    public function kesehatan()
    {
        if ($this->health > 70) {
            return "Anda Lulus Tes Kesehatan";
        } else if ($this->health <= 70 && $this->health > 50) {
            return "Anda Tidak Fit, Silahkan Minum Vitamin";
        } else if ($this->health <= 50 && $this->health > 0) {
            return "Anda Harus Istirahat Penuh";
        } else if ($this->health <= 0) {
            return "Pembalap Tim Anda Meninggal";
        }
    }
}
