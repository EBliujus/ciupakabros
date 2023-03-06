<?php

/* 2. Suskaičiuokite kiek masyve yra reikšmių didesnių už 10; */

$array = array();

for ($i = 0; $i < 30; $i++) {

$array[] = rand(5, 25);
}
print_r ($array);


$count = 0;
$x = 10;

foreach($array as $i) {
    if ($i > $x) {
        $count++;
    }
}
echo 'Didesniu reiksmiu skaicius yra: ', $count;