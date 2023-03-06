<?php
/* c. Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą; */

$array = array();

for ($i = 0; $i < 30; $i++) {

$array[] = rand(5, 25);
}
echo '<pre/>';
print_r ($array);
echo '<br/>';

$suma = 0;

for ($i = 0; $i < count($array); $i += 2){
    $suma += $array[$i];
}

echo 'Suma:', $suma, '<br/>';
