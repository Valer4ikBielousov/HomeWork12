<?php
function wordsLength(array &$words, int $length): array
{
    foreach ($words as $key => $word) {
        if (strlen($word) < $length) {
            $words[$key] = $word;

        } else {
            unset($words[$key]);
        }
    }
    return $words;
}

$words = ['people', 'cat', 'man', 'dog', 'apple'];
$subjects = wordsLength($words, 4);
print_r($words);