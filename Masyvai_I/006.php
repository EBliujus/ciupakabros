<?php
/* 6. Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis). */

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