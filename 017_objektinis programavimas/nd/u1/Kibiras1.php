<?php

class Kibiras1 {
    protected $akmenuKiekis = 0;
  
    public function prideti1Akmeni() {
     return $this->akmenuKiekis += 1;
    }
  
    public function pridetiDaugAkmenu($kiekis) {
      $this->akmenuKiekis += $kiekis;
    }
  
    public function kiekPririnktaAkmenu() {
      return $this->akmenuKiekis;
    }
  }