<?php
$firstName = ['nick', 'ken', 'debora', 'michel'];
$up = fn($upper) => (ucfirst($upper));
print_r(array_map($up, $firstName));
