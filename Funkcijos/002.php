<?php

/* 2. Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;*/

$hi = 'Hello World!!!';
$num = rand(1, 6);

function greet () {

    global $hi, $num;
    echo "<h$num>$hi</h$num>";
}
greet();

