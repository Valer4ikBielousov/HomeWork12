<?php
function wordsLength(array &$words, int $length): array
{
    $newarray = [];
    foreach ($words as $word) {
        if (strlen($word) < $length) {
            $newarray[] = $word;
            $words = $newarray;
        }
    }
    return $words;
}

$words = ['people', 'cat', 'man', 'dog', 'apple'];
$subjects = wordsLength($words, 4);
print_r($words);