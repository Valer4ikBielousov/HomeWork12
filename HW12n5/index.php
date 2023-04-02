<?php
$n = 4;
function product($numbers, &$times)
{

    foreach ($numbers as $key => $number) {
        $numbers[$key] = $times * $number;
    }
    return $numbers;
}

print_r(product(([2, 5, 2, 3]), $n));