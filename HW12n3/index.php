<?php
$sumNumber = function ($sumArray) {
    $sum = 0;
    foreach ($sumArray as $number) {
        $sum = ($number > 10) ? ($sum += $number) : $sum;
    }
    return $sum;
};
$result = $sumNumber([1, 4, 6, 10, 12, 15, 20, 30]);
echo $result;