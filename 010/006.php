<?php
/* 6. Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti. */

$text = 'An American in Paris';
// $newText = strtoupper($text);
print_r(count_chars($text,1));

/* $textArr = count_chars($text,1);

foreach ($textArr as $key=>$value) {
    echo $key;
} */