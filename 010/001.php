<?php
/* 1. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.  */

$vardas = 'Chadwick';
$pavarde = 'Boseman';

echo $vardas, ' ', $pavarde, '<br/>';
if ($vardas < $pavarde) {
    echo $vardas, '<br/>';
} else {
    echo $pavarde, '<br/>';
}

