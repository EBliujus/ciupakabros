<?php

require __DIR__ . '/Stikline.php';

$stikline1 = new Stikline(200);
$stikline2 = new Stikline(150);
$stikline3 = new Stikline(100);

// Pripilama didžiausia stiklinė
$stikline1->ipilti($stikline1->turis);

// Išpilama didžiausia stiklinė į vidutinę stiklinę
$stikline2->ipilti($stikline1->ispilti());

// Išpilama vidutinė stiklinė į mažiausią stiklinę
$stikline3->ipilti($stikline2->ispilti());

// Išvedamas mažiausios stiklinės kiekis
echo "Mažiausioje stiklinėje yra {$stikline3->ispilti()} ml vandens.";
