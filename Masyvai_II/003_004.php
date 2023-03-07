<?php
/* 3. Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm). */

$arr = array();
// sukuriu masyva is 10 elementu;
for ($i = 0; $i < 10; $i++) {
    $small_arr = array();
    for ($k = 0; $k < rand(2, 20); $k++){
        $small_arr[] = chr(rand(65, 90));
    }
    sort($small_arr);
    $arr[] = $small_arr;
}
echo '<pre/>';
print_r($arr);
echo '---------------------------', '<br/>';


 /* 4. Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai trumpiausi eitų pradžioje. Masyvai kurie turi bent vieną “K” raidę, visada būtų didžiojo masyvo visai pradžioje. */ 