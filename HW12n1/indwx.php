<?php
function shownumbers(array $numbers, callable $condition): array
{
    $resultarray = [];
    foreach ($numbers as $number) {
        if ($condition($number)) {
            $resultarray[] = $number;
        }
    }
    return $resultarray;
}

$arraynumbers = [1, 2, 3, 4, 5, 6, 7, 9, 12];

$conditionfunction = function ($n): bool {
    return $n % 2 === 0;
};

print_r(shownumbers($arraynumbers, $conditionfunction));
