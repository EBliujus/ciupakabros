<?php

/* 5. Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100.  */

$arr = array();

// for($i =0; $i < 30; $i++) 
foreach (range(0, 30) as $i) {
    $user_id = rand(1, 1000000);
    $place_in_row = rand (1, 100);
    $arr[$i] = array('user_id' => $user_id, 'place_in_row' => $place_in_row);  
}
echo '<pre>';
print_r($arr);
echo '-------------------------', '<br/>';

/* 6. Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.
*/

  $sortId = fn($a, $b) => $a['user_id'] - $b['user_id'];
  usort($arr, $sortId);

  print_r($arr);
echo '----------------------------', '<br/>';

  $sortRow = fn($a, $b) => $b['place_in_row'] - $a['place_in_row'];
  usort($arr,$sortRow);

  print_r($arr);



   
