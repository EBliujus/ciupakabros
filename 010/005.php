<?php
/* 5. Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti. */

$text = 'An American in Paris';

$newText = strtoupper($text);
echo  str_replace('A', '*', $newText),  '<br/>';

