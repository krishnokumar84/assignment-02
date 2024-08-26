<?php

$strings = ["Hello", "World", "PHP", "Programming"];

function countVowels($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;

    $lowercaseString = strtolower($string);

    for ($i =0; $i < strlen($lowercaseString); $i++) {
        if (in_array($lowercaseString[$i], $vowels)) {
            $count++;
        }
    }

    return $count;
}

foreach ($strings as $string) {
    $vowelCount = countVowels($string);
    $reversedString = strrev($string);

    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\b";
}

?>