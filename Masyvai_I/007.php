<?php
/* 7. Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve. */

$array = array();
$array2 = array();

for ($i = 0; $i <= 100; $i++) {

$array[] = rand(100, 999);
$array2[] = rand(100, 999);
}
echo '<pre/>';
print_r (array_unique($array));
echo '<br/>';
print_r (array_unique($array2));;

if (array_unique($array) == array_unique($array) || array_unique($array2) == array_unique($array2));
    echo 'Klaida: reiksmes nera unikalios';