<?php

class Stikline {
    private $turis;
    private $kiekis;
  
    public function __construct($turis) {
      $this->turis = $turis;
      $this->kiekis = 0;
    }
  
    public function ipilti($kiekis) {
      if ($this->kiekis + $kiekis > $this->turis) {
        $this->kiekis = $this->turis;
      } else {
        $this->kiekis += $kiekis;
      }
    }
  
    public function ispilti() {
      $kiekis = $this->kiekis;
      $this->kiekis = 0;
      return $kiekis;
    }
  }
