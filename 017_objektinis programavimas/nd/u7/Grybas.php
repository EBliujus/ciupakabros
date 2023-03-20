<?php

class Grybas {
    private $valgomas;
    private $sukirmijes;
    private $svoris;

    public function __construct() {
        $this ->valgomas = (bool) rand(0, 1);
        $this->sukirmijes = (bool) rand(0, 1);
        $this->svoris = (int) rand(5, 45);
    }
    public function arValgomas() {
        $this->valgomas;
    }

    public function arSukirmijes() {
        $this->sukirmijes;
    }

    public function koksSvoris() {
        $this->svoris;
    }
}

class Krepsys {
    const DYDIS = 500;

    private $grybai = [];

    public function idetiGryba(Grybas $grybas) {
        if ($grybas->arValgomas() && !$grybas->arSukirmijes() && count($this->grybai) < self::DYDIS) {
            $this->grybai[] = $grybas;
        }
    }

    public function koksDydis() {
        return count($this->grybai);
    }
}



