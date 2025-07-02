<?php

$str = readline('Enter a word: ');
function is_palindrom($s) {
    $lower = strtolower($s);
    return strrev($lower) === $lower;
}

var_dump(is_palindrom($str));

if (is_palindrom($str)) {
    echo "$str is a palindrom\n";
} else {
    echo "$str is not a palindrom\n";
}