<?php

echo '<br>';

$jonas = rand(10, 20);
$petras = rand(5, 25);
if ($jonas > $petras) {
    echo "<h1>Jonas laimi $jonas : $petras </h1>";
}
else if ($jonas < $petras) {
    echo "<h1>Petras laimi $jonas : $petras </h1>";
}
else {
    echo "<h1>Niekas $jonas : $petras</h1>";
}
/* $vienas = 1;
$rezultatas = 1 == $vienas ? 'Yes' : 'No';

echo "<h1>$rezultatas</h1>"; */
$rezultatas = $vienas ?? 8;// gražina 8
$vienas = 1;
// $rezultatas = $vienas ?? 8;// gražina 1

// echo "<h1>$rezultatas</h1>";

$parcel = 'S';

if ($parcel == 'S') {
    echo 'S';
} 
if (parcel == 'S' || parcel == 'M' ) {
    echo 'M';
}
if (parcel == 'S' || parcel == 'M' || parcel == 'L') {
    echo 'L';
}
if (parcel == 'S' || parcel == 'M' || parcel == 'L' || parcel == 'XL') {
    echo 'XL';
}
