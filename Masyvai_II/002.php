<?php
/* 2. Naudodamiesi 1 uždavinio masyvu:
a).Suskaičiuokite kiek masyve yra elementų didesnių už 10;
b). Raskite didžiausio elemento reikšmę;
c). Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.);
d). Visus antro lygio masyvus “pailginkite” iki 7 elementų;
e). Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai 
 */
// A.
$arr = array();
// sukuriu masyva is 10 elementu;
for ($i = 0; $i < 10; $i++) {

    $big_arr = array();

        for ($j = 0; $j < 5; $j++) {
            
             $big_arr[] = rand(5, 25);
}
    $arr[] = $big_arr;
}
echo '<pre/>';
print_r ($arr);
echo '-------------------------------------', '<br/>';

$count = 0;
foreach($arr as $value) {
    foreach($value as $number) {
        if ($number > 10) {
            $count++;
        }
    }
}
    // if ($item > 10) {
    //     $count++;
    


echo 'Skaiciu didesniu nei 10 kiekis:',$count, '<br/>';
echo '-------------------------------------', '<br/>';
$max = $arr[0][0];
foreach($arr as $value) {
        foreach($value as $number) {
            if ($number > $max) {
                $max = $number;
            }
        }   
}
echo 'Didziausias skaicius yra :',$max, '<br/>';
echo '-------------------------------------', '<br/>';
$sum = array();

foreach($arr as $value){
    foreach($value as $index => $item){
        if (!isset($sum[$index])) {
            $sum[$index] = 0;
        }
        $sum[$index] += $item;
    }
}
print_r($sum);
'<br/>';
echo '-------------------------------------', '<br/>';


