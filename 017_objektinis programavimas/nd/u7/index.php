<?php

require __DIR__ . '/Grybas.php';


$k = new Krepsys();

while ($k->koksDydis() < Krepsys::DYDIS) {
    $grybas = new Grybas();
    $k->idetiGryba($grybas);
}

echo "Surinktas krepšys su {$k->koksDydis()} grybais.";