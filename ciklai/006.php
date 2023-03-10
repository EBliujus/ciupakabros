<?php
/* 6. Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius. Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. Suprogramuokite tris skirtingus scenarijus kai monetos metimą stabdome:
Iškritus herbui;
Tris kartus iškritus herbui;
Tris kartus iš eilės iškritus herbui; */

while (true) {
    $result = rand(0, 1);
    if ($result == 0) {
      echo "H";
      break;
    } else {
      echo "S";
    }
  }
echo '<br/>';
echo '--------------------------', '<br/>';

$count = 0;
while ($count < 3) {
  $result = rand(0, 1);
  if ($result == 0) {
    echo "H";
    $count++;
  } else {
    echo "S";
    $count = 0;
  }
}
echo '<br/>';
echo '--------------------------', '<br/>';

$count = 0;
while (true) {
  $result = rand(0, 1);
  if ($result == 0) {
    echo "H";
    $count++;
    if ($count == 3) {
      break;
    }
  } else {
    echo "S";
    $count = 0;
  }
}