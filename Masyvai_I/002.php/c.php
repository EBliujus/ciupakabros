<?php
/* c. Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą; */

$array = array();

for ($i = 0; $i < 30; $i++) {

$array[] = rand(5, 25);
}
print_r ($array);
echo '<br/>';

$count = 0;
$suma = 0;

foreach($array as $item){
    if ($item % 2 ===0) {
        $count++;
        $suma++;
    }
}
echo 'Skaiciu kiekis:', $count , '<br/>';
echo 'Suma:', $suma, '<br/>';
