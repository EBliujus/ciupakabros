<?php

class Pinigine {
    
    private $popieriniaiPinigai = 0;
    private $metaliniaiPinigai = 0;

    public function Money($kiekis) {
        if ($kiekis <= 2) {
            $this-> metaliniaiPinigai += $kiekis;
        } else {
            $this-> popieriniaiPinigai += $kiekis;
        }
    }
    pub
}