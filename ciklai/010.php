<?php
/* 10. Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija. Vinies ilgis 8.5cm (pilnai sulenda į lentą).
“Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. Suskaičiuokite kiek reikia smūgių.
“Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30 mm, bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti), kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių. */

$vinis = 85;
$viniu_skaicius = 5;
$smugis_min = rand(5, 20);
$smugis_max = rand(20, 30);

$smugiu_sk = 0;
$gylis = 0;

while ($gylis < 425) {
    $smugis_min = rand(5, 20);
    $gylis += $smugis_min;
    $smugiu_sk++;
}
echo 'Mazais smugiais ju reikia:', $smugiu_sk, '<br>';
echo '----------------------------------', '<br>';

$smugiu_sk = 0;
$gylis = 0;

while ($gylis < 425) {
    $smugis_max = rand(20, 30);
    $pataikymas = rand(0, 1); /* 0 - nepataike, 1 - pataike */

    if ($pataikymas) {
        $gylis += $smugis_max;
        $smugiu_sk++;
    }
}
echo 'Dideliais smugiais ju reik:',$smugiu_sk;
