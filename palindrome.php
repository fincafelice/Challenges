<?php

// Create the function so it will return a bool value true
// if the entered word is a palindrome. After you are complete 
// test several known palindromes, then test regular words in 
// your function.

// Amore, Roma
// A man, a plan, a canal: Panama
// No 'x' in 'Nixon

function clean($string) 
{
   $string = str_replace(' ', '', $string); // Replaces all spaces.

   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}

function palindrome ($string) 
{
	$string = clean($string);
	if (strrev($string) == $string) {
        echo "STRING IS PALINDROME\n";
    } else { 
        echo "STRING IS NOT A PALINDROME\n"; 
    } 
    // var_dump (strrev($string));
}
echo 'Enter your text: ';
$string = strtolower(trim(fgets(STDIN)));
palindrome ($string);
// var_dump($string);
echo $string. PHP_EOL;
echo "How fun was that?!\n";
// This script works as it should! :) 12/6/2014