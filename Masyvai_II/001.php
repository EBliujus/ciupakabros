<?php
/* 1.Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25. */

$arr = array();
// sukuriu masyva is 10 elementu;
foreach (range(1, 10) as $i)  {

    $big_arr = array();

        foreach (range(5, 25, 5) as $j) {

             $big_arr[] = rand(5, 25);
}
    $arr[] = $big_arr;
}
echo '<pre/>';
print_r ($arr);