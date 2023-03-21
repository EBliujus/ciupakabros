<?php


class Gyvunas extends Miskas {

    public $rusis, $spalva;

    public $vardas = 'Laima';

   /*  public $vardas = 'Tadas'; *//* tokiu budu galiem pasikoreguoti tevo perduodamas savybes vaike(OVERWRITTEN'int) */

    public function __construct (string $rusis, string $spalva, string $vardas)
    {
        parent::__construct($vardas);
        $this->rusis = $rusis;
        $this->spalva = $spalva;
    }
/*     public function say()
    {
        $this->bu();
    }
 */
    public function bu()
    {
        echo '<h1>BEEEEEBBBRRRRAAASSSS.....</h1>';
    }

    public function sayTevoBu()
    {
       parent::bu();
    }
    

}