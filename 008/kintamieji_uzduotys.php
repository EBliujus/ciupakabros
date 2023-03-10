<?php
/* 1. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)". */

$vardas = 'Evaldas';
$pavarde = 'Pavardenis';
$metai = 1991;
$data = 2023;

echo $XX = $data - $metai, '<br/>';
echo "Aš esu $vardas $pavarde. Man yra $XX metai.", '<br/>';

echo '<br/>', '---------------------------------------------';
/* 2. Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio. */
echo '<br/>';
$pirmas = rand(0, 4);
$antras = rand(0, 4);
echo $pirmas, ' ', $antras, '<br/>';

if ($pirmas == 0 || $antras ==0 ) {
    echo 'Dalyba negalima';
}
else if ($pirmas == $antras) {
    echo 'Skaiciai yra lygus';
}
else if ($pirmas > $antras) {
    echo (round(($pirmas /$antras), 2));
}
else if ($pirmas < $antras) {
    echo (round(($antras/$pirmas), 2));
} 

echo '<br/>','---------------------------------------------';
/* 3. Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę. */
echo '<br/>';
$s1 = rand(0, 25);
$s2 = rand(0, 25);
$s3 = rand(0, 25);
echo $s1, ' ', $s2, ' ', $s3, '<br/>';
echo $s1 + $s2 + $s3 - min($s1,  $s2,  $s3) - max($s1, $s2,  $s3), '<br/>';

echo '---------------------------------------------', '<br/>';
/* 4. Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų.  */
$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

echo $a, ' ', $b, ' ', $c, '<br/>';

if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    echo 'Trikampi atspausdinti galima';
} else {
    echo 'Trikampis nesigaus';
}
echo '<br/>';
echo  '---------------------------------------------', '<br/>';
/* 5. Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti). */
$q= rand(0, 2);
$w= rand(0, 2);
$e= rand(0, 2);
$r= rand(0, 2);

$nuliai = 0;
$vienetai = 0;
$dvejetai = 0;

match($q) {
    0 => $nuliai++,
    1 => $vienetai++,
    2 => $dvejetai++,
};
match($w) {
    0 => $nuliai++,
    1 => $vienetai++,
    2 => $dvejetai++,
};
match($e) {
    0 => $nuliai++,
    1 => $vienetai++,
    2 => $dvejetai++,
};
match($r) {
    0 => $nuliai++,
    1 => $vienetai++,
    2 => $dvejetai++,
};
echo $q, ' ', $w, ' ', $e, ' ', $r, '<br/>';
echo  "Nuliai: $nuliai, Vienetai: $vienetai,Dvejetai: $dvejetai", '<br/>';

echo  '---------------------------------------------', '<br/>';
/* 6. Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3> */
$sk = rand(1, 6);
echo "<h$sk>$sk</h$sk>";

echo '---------------------------------------------', '<br/>';
/* 7. Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni. */ 
$sk1 = rand(-10, 10);
$sk2 = rand(-10, 10);
$sk3 = rand(-10, 10);
if ($sk1 < 0) {
    echo '<h1 style="color:green">'.$sk1.'</h1>';
} else if ($sk1 == 0) {
    echo '<h1 style="color:crimson">'.$sk1.'</h1>';
} else {
    echo '<h1 style="color:blue">'.$sk1.'</h1>';}

if ($sk2 < 0) {
    echo '<h1 style="color:green">'.$sk2.'</h1>';
} else if ($sk2 == 0) {
    echo '<h1 style="color:crimson">'.$sk2.'</h1>';
} else {
    echo '<h1 style="color:blue">'.$sk2.'</h1>';}

if ($sk3 < 0) {
    echo '<h1 style="color:green">'.$sk3.'</h1>';
} else if ($sk3 == 0) {
    echo '<h1 style="color:crimson">'.$sk3.'</h1>';
} else {

    echo '<h1 style="color:blue">'.$sk3.'</h1>';}

    echo '<br/>';
    echo '---------------------------------------------';
/*     8. Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000. */
$zvake = 1;
$nuolaida1001 = 0.03;
$nuolaida2001 = 0.04;
$pirkimas = rand(5, 3000);
echo '<br/>';
if ($pirkimas <= 1000) {
    echo 'Suma:',$zvake * $pirkimas, '€', '<br/>', 'Zvakiu skaicius:',$pirkimas, 'vnt.','<br/>','Vnt. kaina:', $zvake,'€';
}
else if ($pirkimas <= 2000) {
    echo 'Suma:', $zvake * $pirkimas - ($pirkimas * $nuolaida1001),'€', '<br/>', 'Zvakiu skaicius:',$pirkimas, 'vnt.','<br/>','Vnt. kaina:', ($zvake * $pirkimas - ($pirkimas * $nuolaida1001)) / $pirkimas,'€';
} else if ($pirkimas > 2000) {
    echo 'Suma:',$zvake * $pirkimas - ( $pirkimas *$nuolaida2001),'€', '<br/>', 'Zvakiu skaicius:',$pirkimas, 'vnt.','<br/>','Vnt. kaina:',  ($zvake * $pirkimas - ( $pirkimas *$nuolaida2001)) / $pirkimas,'€';
}
echo '<br/>';
echo  '---------------------------------------------', '<br/>';
/* 9. Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus */
$skaicius1 = rand(0, 100);
$skaicius2 = rand(0, 100);
$skaicius3 = rand(0, 100);

echo  $skaicius1,' ', $skaicius2,' ', $skaicius3, '<br/>';

echo 'Vidurkis:', round(($skaicius1 + $skaicius2 + $skaicius3) / 3), '<br/>';

$count = 0;
$suma = 0;
if ($skaicius1 >= 10 && $skaicius1 <= 90) {
        $count++;
        $suma += $skaicius1; 
}
if ($skaicius2 >= 10 && $skaicius2 <= 90) {
        $count++;
        $suma += $skaicius2; 
}
if ($skaicius3 >= 10 && $skaicius3 <= 90) {
        $count++;
         $suma += $skaicius3; 
}
echo 'Vidurkis:', round($suma / $count), '<br/>';

echo '---------------------------------------------', '<br/>';
/* 10. Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių. */

// $valandos = rand(0, 23);
// $minutes = rand(0, 59);
// $sekundes = rand(0, 59);
$sek= rand(0, 86400);

// echo "Laikrodis: $valandos h $minutes min $sekundes s", '<br/>';
// echo $sek, '<br/>';


$randTime = rand(0, 300);
echo "Pridetos sekundes: $randTime", '<br/>' ;
$pridetasLaikas = $sek + $randTime;
// echo $pridetasLaikas, '<br/>';
$laikas = gmdate("H:i:s",$pridetasLaikas);
echo gmdate("H:i:s",$sek), '<br/>';
// echo $randTime, '<br/>';
echo "Modernus Laikrodis: $laikas", '<br/>' ; 

// echo 'Liekana:', $randTime % 60,'<br/>' ;
// $NewTime = 0;
// echo $NewTime = $valandos * 3600 +  $minutes * 60  + $sekundes + $randTime, '<br/>';
// $time = gmdate("H:i:s",$NewTime);
// echo "NaujasLaikrodis: $time", '<br/>';
// echo $NewHour = $NewTime / 3600,'<br/>' ;
// echo $NewMinutes = ($NewTime - $NewHour) / 3600, '<br/>';
// // echo $NewMin= $NewHour % 60,'<br/>' ;

// $valanda = floor($NewTime / 3600);
// $minute = floor($NewTime / 60 % 60);
// $sekunde = floor($NewTime % 60);

// echo "NaujasLaikrodis: $valanda h $minute min $sekunde s", '<br/>' ; 


echo '---------------------------------------------', '<br/>';
/* 11.Naudokite funkcija rand(). Sugeneruokite 6 kintamuosius su atsitiktinem reikšmėm nuo 1000 iki 9999. Atspausdinkite reikšmes viename strige, išrūšiuotas nuo didžiausios iki mažiausios, atskirtas tarpais. Naudoti ciklų ir masyvų NEGALIMA. */
$pirma = rand(1000, 9999);
$antra = rand(1000, 9999);
$trecia = rand(1000, 9999);
$ketvirta = rand(1000, 9999);
$penkta = rand(1000, 9999);
$sesta = rand(1000, 9999);

// $arr = [$pirma,  $antra,  $trecia,  $ketvirta,  $penkta,  $sesta];
// echo max($arr), '<br/>';
// echo "$pirma  $antra  $trecia  $ketvirta  $penkta  $sesta", '<br/>';

// range($pirma, $sesta );
// echo range;
$max = max($pirma, $antra, $trecia, $ketvirta, $penkta, $sesta);
$min = min($pirma, $antra, $trecia, $ketvirta, $penkta, $sesta);
$vid = ($pirma + $antra + $trecia + $ketvirta + $penkta + $sesta) - $max - $min;

