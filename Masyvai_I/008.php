<?php
/* 8. Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose. */

$array = array();
$array2 = array();

for ($i = 0; $i <= 100; $i++) {

$array[] = rand(100, 999);
$array2[] = rand(100, 999);
}
// echo '<pre/>';
print_r (array_unique($array));
echo '<br/>';
print_r (array_unique($array2));;

$bendri = [element for element in array if element in array2];
