<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PirmasController extends Controller
{
    public function hello()
    {
        return '<h1 style="color:crimson; display:grid; place-items:center;">LABAS as KRABAS</h1>';
    }
    public function helloV()
    {
        return '<h1 style="color:darkcyan; display:grid; place-items:center;">LABAS VOVERE</h1>';
    }

    public function helloAnimal($animal)
    {
        return '<h1 style="color:darkcyan; display:grid; place-items:center;">LABAS '.$animal.'</h1>';
    }

    public function helloFancy($animal, $color)
    {
        return view('hello', [
            'animal' => $animal,
            'color' => $color
        ]);
    }
// galima keisti kintamuju vardus nuo tu, kurie yra panaudoti web.php route
    public function sum($a, $b)
    {
        $abSum= $a + $b;

        return view('sum.suma', [
            'rez' => $abSum
        ]);
    }
    
}
