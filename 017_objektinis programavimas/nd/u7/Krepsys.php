<?php

class Krepsys {

    private $dydis = 500;
    private $pririnkta = 0;

    public function deti (Grybas $grybas)  : bool
    {
        if($grybas->valgomas && !$grybas->sukirmijes) {
            $this->pririnkta += $grybas->svoris;
        }
        
        return $this->dydis > $this->pririnkta;
        
    }
}