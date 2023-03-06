<?php
/* 4.Išrūšiuokite 3 uždavinio masyvą pagal abecėlę. */

$letters = array();

for ($i = 0; $i < 200; $i++) {
  $letters[] = chr(rand(65, 68));
}

print_r ($letters);
echo '<br/>';
echo '<br/>';


sort($letters, SORT_STRING);
print_r($letters);