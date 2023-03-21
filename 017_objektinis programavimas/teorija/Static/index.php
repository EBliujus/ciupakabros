<?php

require __DIR__ . '/TV.php';

$tv1 = new TV;

echo $tv1->koksKanalasIjungtas();
echo '<pre>';
echo $tv1->gamintojas;
echo '<pre>';
print_r($tv1 -> kanalai);