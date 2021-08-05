<?php

function break_words($sentence){
    $sentence = str_replace('.', '', $sentence);
    return explode(" ", strtolower($sentence));
}
function sort_words($words, $unique = false){
    if ($unique){ $words = array_unique($words); }
    sort($words);
    return $words;
}
function print_first_word($words){
    // if (count($words) > 0) { echo $words[0]; }
    if (count($words) > 0) { echo $words[array_key_first($words)]; }
}
function print_last_word($words){
    if (count($words) > 0) {
        echo $words[array_key_last($words)]; //
    }
}
function sort_sentence($sentence, $unique = false){
    $sentence = str_replace('.', '', $sentence);
    $words = explode(" ", strtolower($sentence));
    if ($unique){ $words = array_unique($words); }
    sort($words);
    return $words;
}
function print_first_and_last($sentence){
    $sentence = str_replace('.', '', $sentence);
    $words = explode(" ", strtolower($sentence));
    if (count($words) > 0) {
        echo $words[array_key_first($words)];
        echo $words[array_key_last($words)];
    }
}
function print_first_and_last_sorted($sentence){
    $sentence = str_replace('.', '', $sentence);
    $words = explode(" ", strtolower($sentence));
    if (count($words) > 0) {
        sort($words);
        echo $words[array_key_first($words)];
        echo $words[array_key_last($words)];
    }
}

$sentence = "All good things come to those who wait.";

$words = break_words($sentence);
print_r($words);

$words = sort_words($words);
print_r($words);

print_first_word($words);

print_last_word($words);

$words = sort_sentence($sentence);
print_r($words);

print_first_and_last($sentence);
print_first_and_last_sorted($sentence);
