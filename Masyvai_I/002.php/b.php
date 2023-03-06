<?php
/* b. Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli; */

$array = array();

for ($i = 0; $i < 30; $i++) {

$array[] = rand(5, 25);
}
print_r ($array);
echo '<br/>';

foreach ($array as $item){
    echo $item, '<br/>';
}


$largest = max($array);

$index = array_keys($array, $largest);

echo 'Didziausias skaicius:',$largest, '<br/>';
echo 'Indekso numeris/iai:', implode(', ', $index),'<br/>';
