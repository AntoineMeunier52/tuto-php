this is print by default.

<?php
//this is a comment on one line
/*this is a comment on multiple */

/*

PHP => Hypertext Preprocessor

-script language
- dynamic typing

use for:
  - server side scripting
  - pragramming language in command line interface (ex: cron job)

paradigme:
  - prodedural
  - OOP
  - imperative

Regex:
  - compatible with Perl
*/

// echo: print a string
// print: print a string
echo "echo affiche sur le stdout\n";
print "print affiche sur le stdout\n";
//or
print("print affiche sur le stdout\n");

phpinfo(); // A bunch of information about the PHP environment

echo "==========================================\n";
// VARIABLES
/* 
-Atomic data types:
  -type scalar:
  		- bool
  		- int
  		- float
  		- string
  - array
  - object
  - callable
  - resource
  - never
  - void

  -Unary types:
  	- null

  -Class types:
  	- class
  	- interface
  	- Enum
*/

$a_bool = true;
$b_bool = FALSE; //case insensitive, false is the same as FALSE

$a_str = "Hello World $a_bool";
$b_str = 'Hello World $a_bool'; //single quote, no variable interpolation

echo $a_str." ----- ". $b_str."\n"; //conctenation with dot

$a_int = 42;
$b_int = 0x2A; //hexadecimal, 42 in decimal
$c_int = 0b101010; //binary, 42 in decimal

echo get_debug_type($a_bool), "\n";
echo get_debug_type($a_str), "\n";

//check type
if (is_int($a_int)) {
	$a_int++;
	var_dump($a_int); //dump the variable type and value
	echo "a_int is an integer and has been incremented to: $a_int\n";
}

if (is_string($b_str)) {
	$temp = $b_str;
	$b_str = "New String";
	echo "b_str '$temp' is a string and has been changed to: $b_str\n";
}

$presnom = "Antoine";
$nom = "Meunier";
$note1 = 10;
$note2 = 20;

echo "Bonjour $presnom $nom vous avez eu ".(($note1 + $note2) / 2)." de moyenne\n";

//CONSTANTS
define("PI", 3.14159); //define a constant

//ARRAYS
$array = [1, 2, 3, 4, 5]; //short array syntax
echo $array[4], "\n";

$array2 = [1, 2, 3, [10, 20, 30]];
echo $array2[3][1], "\n"; //accessing nested array element

$array3 = [
	'nom' => 'Meunier', 
	'prenom' => 'Antoine', 
	'notes' => [10, 20]
];
echo $array3['nom'];
$array3['notes'][] = 30; //push a new note to end of the notes array

print_r($array3); //print the array structure
var_dump($array3); //dump the array structure with types

//CONDITIONAL
if ($a_int > 0) {
	echo "a_int is greater than 0\n";
} elseif ($a_int < 0) {
	echo "a_int is less than 0\n";
} else {
	echo "a_int is equal to 0\n";
}