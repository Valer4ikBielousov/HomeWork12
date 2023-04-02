<?php
$firstName = ['nick', 'ken', 'debora', 'michel'];
$up = fn($upper) => (mb_strtoupper($upper[0]) . mb_substr($upper, 1,));
print_r(array_map($up, $firstName));
