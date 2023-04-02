<?php
$sumNumber = function ($sumArray)
{
    $sum= 0;
foreach ($sumArray as $number){
    $sum = ($number > 10) ? ($sum += $number) : $sum ;
}
return  $sum;
};
$result = $sumNumber([1,5,6,10,12,16,24,30]);
echo $result;