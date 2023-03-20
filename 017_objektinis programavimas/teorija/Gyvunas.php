<?php


class Gyvunas extends Miskas {

    public $rusis, $spalva;

    public $vardas = 'Tadas';

    public function __construct (string $rusis, string $spalva)
    {
        $this->rusis = $rusis;
        $this->spalva = $spalva;
    }

    

}