<?php
namespace Petro;
use Bebro\Valio\Go;

class Read extends Go {

    public function getData() 
    {
        echo '<h2>Mars '.$this->goStars() .' Orbit -125465761278654329.9654334002</h2>';
    }

}