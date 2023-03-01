<?php
/* Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)". */

$vardas = 'Evaldas';
$pavarde = 'Bliujus';
$metai = 1991;
$data = 2023;

echo $XX = $data - $metai;
echo '<br/>';
echo "Aš esu $vardas $pavarde. Man yra $XX metai.";
echo '<br/>';
echo '---------------------------------------------';
/* Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio. */
echo '<br/>';
$pirmas = rand(0, 4);
$antras = rand(0, 4);
echo $pirmas, ' ', $antras;
echo '<br/>';
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
echo '<br/>';
echo '---------------------------------------------';
/* Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę. */
echo '<br/>';
$s1 = rand(0, 25);
$s2 = rand(0, 25);
$s3 = rand(0, 25);
echo $s1, ' ', $s2, ' ', $s3;
echo '<br/>';
if ($s1 > $s2 && $s1 < $s3) {
    echo $s1;
}
else if ($s2 > $s1 && $s2 < $s3) {
    echo $s2;
}
else if ($s3 < $s1 && $s3 > $s2) {
    echo $s3;
}
echo '<br/>';
echo '---------------------------------------------';
/* Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų.  */
$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);
echo '<br/>';
echo $a, ' ', $b, ' ', $c;
echo '<br/>';

if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    echo 'Trikampi atspausdinti galima';
} else {
    echo 'Trikampis nesigaus';
}
echo '<br/>';
echo '---------------------------------------------';
/* Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti). */
$q= rand(0, 2);
$w= rand(0, 2);
$e= rand(0, 2);
$r= rand(0, 2);
echo '<br/>';
echo $q, ' ', $w, ' ', $e, ' ', $r;
if ($q == 0 && $w == 0 && $e && == 0 && $r == 0) {
    
}