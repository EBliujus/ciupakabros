<?php
/* 3. Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės. */


$letters = array();

for ($i = 0; $i < 200; $i++) {
  $letters[] = chr(rand(65, 68));
}

print_r ($letters);
echo '<br/>';

$countA = 0;
$countB = 0;
$countC = 0;
$countD = 0;

foreach ($letters as $letter){
    switch ($letter) {
        case 'A':
            $countA++;
            break;
        case 'B':
            $countB++;
            break;
        case 'C':
            $countC++;
            break;
        case 'D':
            $countD++;
            break;
    }
}
echo 'Raide A pasikartojo:', $countA, '<br/>';
echo 'Raide b pasikartojo:', $countB,'<br/>';
echo 'Raide C pasikartojo:', $countC,'<br/>';
echo 'Raide D pasikartojo:', $countD,'<br/>';
