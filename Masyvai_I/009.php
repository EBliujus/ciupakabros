<?php
/* 9. Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės, o jo reikšmės iš būtų antrojo masyvo.
  */

  $array = array();
$array2 = array();

for ($i = 0; $i <= 100; $i++) {

$array[] = rand(100, 999);
$array2[] = rand(100, 999);
}
// echo '<pre/>';
/* print_r (array_unique($array)); 
echo '<br/>';
echo '<br/>';
print_r (array_unique($array2));
echo '<br/>';
echo '<br/>'; */

// if (array_unique($array) == array_unique($array) || array_unique($array2) == array_unique($array2));
//     echo 'Klaida: reiksmes nera unikalios';

    $array3 = array_combine($array, $array2);
echo '<pre/>';
    print_r ($array3);
