<?php

require __DIR__ . '/Kibiras1.php';

$kibiras = new Kibiras1();
$kibiras2 = new Kibiras1();
$kibiras->prideti1Akmeni();
$kibiras->pridetiDaugAkmenu(1234);
echo "Pririnkta akmenų: " . $kibiras->kiekPririnktaAkmenu();
echo '<pre>';
var_dump($kibiras);
var_dump($kibiras2->prideti1Akmeni());