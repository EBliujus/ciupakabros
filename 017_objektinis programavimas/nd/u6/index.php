<?php

require __DIR__ . '/Stikline.php';

$s100 = new Stikline(100);
$s150 = new Stikline(150);
$s200 = new Stikline(200);

/* // Pripilama didžiausia stiklinė
$stikline1->ipilti($stikline1->turis);

// Išpilama didžiausia stiklinė į vidutinę stiklinę
$stikline2->ipilti($stikline1->ispilti());

// Išpilama vidutinė stiklinė į mažiausią stiklinę
$stikline3->ipilti($stikline2->ispilti());

// Išvedamas mažiausios stiklinės kiekis
echo "Mažiausioje stiklinėje yra {$stikline3->ispilti()} ml vandens."; */


$s200->ipilti(1500);



echo '<pre>';
var_dump($s100);
var_dump($s150);
var_dump($s200);




