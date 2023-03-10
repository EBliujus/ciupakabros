<?php

function countDivisors(int $number): int {
    $count = 0;

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            $count += 2;
            if ($i == $number / $i) {
                $count--;
            }
        }
    }
    return $count;
}
countDivisors();

