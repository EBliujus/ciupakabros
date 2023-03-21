<?php


require __DIR__ . '/Miskas.php'; /* pirma dedame tevini elementa!!! */
require __DIR__ . '/Gyvunas.php';

$bebras = new Gyvunas('Bebras', 'Raudonas', 'Grazus miskas' );

$bebras->bu();

echo '<pre>';
var_dump($bebras);
$bebras->sayTevoBu();