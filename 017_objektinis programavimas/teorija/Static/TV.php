<?php

class TV {

    private static $kanalai = [
        5 => 'Discovery',
        7 => 'Animal Planet',
        55 => 'MTV'
    ];

    public $gamintojas = 'Sony';

    public function kanalai() 
    {
        return TV::$kanalai;
    }

    public function koksKanalasIjungtas() 
    {
        return 7;
    }
}