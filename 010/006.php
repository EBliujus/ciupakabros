<?php
/* 6. Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti. */
$re = '/[aA]/m';
$str = 'An American in Paris';
// $newText = strtoupper($text);
// $textArr= count_chars($newText,1);

preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);
echo ($matches);

/* $textArr = count_chars($text,1);

foreach ($textArr as $key=>$value) {
    echo $key;
} */
