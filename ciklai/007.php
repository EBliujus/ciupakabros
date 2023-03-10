<?php
/* 7. Kazys ir Petras žaidžiai Bingo. Petras surenka taškų kiekį nuo 10 iki 20, Kazys surenka taškų kiekį nuo 5 iki 25. Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: ​laimėtojo vardas​”. Taškų kiekį generuokite funkcija ​rand()​. Žaidimą laimi tas, kas greičiau surenka 222 taškus. Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų. Nenaudoti cikle break */


$KazysTaskai = 0;
$PetrasTaskai = 0;

while ($KazysTaskai < 222 && $PetrasTaskai < 222) {
    $KazysGavo = rand(5, 25);
    $PetrasGavo = rand(10, 20);

    $KazysTaskai += $KazysGavo;
    $PetrasTaskai += $PetrasGavo;

    if ($KazysTaskai >= 222) {
        echo '<h1>' . 'Partija laimejo Kazys su taskais:', $KazysTaskai . '</h1>';
    } elseif ($PetrasTaskai >= 222) {
        echo '<h1>' .'Partija laimejo Petras su taskais:', $PetrasTaskai. '</h1>';
    }
}

// echo ' Kazio:',$KazysTaskai, ', ', 'Petro:', $PetrasTaskai;


