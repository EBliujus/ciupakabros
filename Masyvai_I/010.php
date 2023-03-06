<?php
/* 10. Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25. Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. Penktas trečio ir ketvirto suma ir t.t.
*/

$num1 = rand(5, 25);
$num2 = rand(5, 25);
$num3 = $num1 + $num2;
$num4 = $num2 + $num3;
$num5 = $num3 + $num4;
$num6 = $num4 + $num5;
$num7 = $num5 + $num6;
$num8 = $num6 + $num7;
$num9 = $num7 + $num8;
$num10 = $num8 + $num9;

echo $num1, ', ' ,$num2,', ' ,$num3,', ' ,$num4,', ' ,$num5,', ' ,$num6,', ' ,$num7,', ' ,$num8,', ' ,$num9,', ' ,$num10, '<br/>';

echo '<br/>';
$arr = array($num1, $num2, $num3, $num4, $num5 ,$num6 ,$num7, $num8, $num9, $num10);
echo '<br/>';
echo '<pre/>';
print_r ($arr);


// foreach ($arr as $item){
//     echo $item, '<br/>';
// }

