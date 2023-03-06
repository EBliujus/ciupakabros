<?php
/* 5. Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes. Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) reikšmių ir kiek unikalių kombinacijų gavote. */

$letters1 = array();
$letters2 = array();
$letters3 = array();

for ($i = 0; $i < 200; $i++) {
  $letters1[] = chr(rand(65, 68));
  $letters2[] = chr(rand(65, 68));
  $letters3[] = chr(rand(65, 68));
}
print_r ($letters1);
echo '<br/>';
echo '<br/>';
print_r ($letters2);
echo '<br/>';
echo '<br/>';
print_r ($letters3);
echo '<br/>';
echo '<br/>';

$merged_arrays = array_combine($letters1, $letters2);

print_r ($merged_arrays);
