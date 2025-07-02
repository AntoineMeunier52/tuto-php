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

function slot() {
    while (true) {
        $opening = readline('Enter the opening hour: ');
        if (is_string($opening) || ( $opening >= 0 && $opening <= 23)) {
            echo "Please enter a number between 0 and 23\n";
            continue;
        }
        break;
    }
}

slot();