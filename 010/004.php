<?php
/* 4. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.
 */

 $vardas = 'Chadwick';
$pavarde = 'Boseman';

echo $vardas, ' ', $pavarde, '<br/>';

echo $LastName =  substr($vardas, 5), '<br/>';
echo $LastSurname =  substr($pavarde,4), '<br/>';

echo $Last = $LastName, $LastSurname;

