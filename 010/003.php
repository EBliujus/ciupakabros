<?php
/* 3. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti. */

$vardas = 'Chadwick';
$pavarde = 'Boseman';

echo $vardas, ' ', $pavarde, '<br/>';

$FirstName =  substr($vardas, 0, 1);
$firstSurname =  substr($pavarde, 0, 1);


echo  $Inicials = $FirstName, $firstSurname;