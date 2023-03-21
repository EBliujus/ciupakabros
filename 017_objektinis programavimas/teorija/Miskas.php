<?php

class Miskas {

    public $vardas;

    public function __construct($vardas)
    {
        $this->vardas = $vardas; 
    }



    protected function bu() /* PROTECTED --- metodas matomas visoje seimoje, PRIVATE--- si metoda mato tik ta klase kurioj parasyta(klases ribose) */ 
    {
        echo '<h1>Buuuuuuuuuuuuuuuuuu.....</h1>';
    }

}