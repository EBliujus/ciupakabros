<?php
// 1 Plano paemimas
require __DIR__ . '/Bebras.php';


$bebras1 = new Bebras;
$bebras2 = new Bebras;
$bebras3 = $bebras1;
// galima priskirti viena kintamaji kitam kintamajam, norint sukurti nauja reiktu naudoti NEW

echo '<pre>';


function fun($obj) {
    $obj -> color = 'red';
}
// fun($bebras2);

/* konkreciai paima is  objekto  savybe !!! joje nesiraso $$$$!!!! "-> SAVYBES PAVADINIMAS"
 */
$bebras2->color = 'red';
$bebras1->color = 'black';

echo "\n\n\n" . $bebras2->color . "\n\n\n";

var_dump($bebras1);

var_dump($bebras2);