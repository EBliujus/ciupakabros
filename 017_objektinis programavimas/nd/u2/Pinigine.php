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
    public function suskaiciuoti() {
        echo 'Metalinai pinigai:' . $this->metaliniaiPinigai . '<br>';
        echo 'Popieriniai pinigai:' . $this->popieriniaiPinigai . '<br>';
        echo 'Suma' . ($this->metaliniaiPinigai + $this->popieriniaiPinigai) . '<br>';
    }
}