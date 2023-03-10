<?php
/* 1.Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą; */
    
        $hi = 'Hello World!!!';
    function greet () {

        global $hi;
        echo "<h1> $hi </h1>";
}
greet();
