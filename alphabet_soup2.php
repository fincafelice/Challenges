<?php

// Create a function alphabet_soup($str) that accepts a 
// string and will return the string in alphabetical order. 
// E.g. "hello world" becomes "ehllo dlorw". So make sure 
// your function separates and alphabetizes each word separately.

function alphabet_soup ($string) 
{
	// $array = explode(" ", $string);
	// str_split($string);
	$array = [];
    for($i = 0; $i < strlen($string); $i++) {
        $array[] = $string{$i};
    }
    sort($array);
	// var_dump($array);
	return ($array);
}

echo 'Enter your text: ';
$string = strtolower(trim(fgets(STDIN)));
// alphabet_soup ($string);
// array_walk($array, alphabet_soup);
	// $count = count ($array);

$newString = alphabet_soup ($string);
$newString = implode ("", $newString);
// var_dump($newString);
echo $newString. PHP_EOL;
echo "Now try saying that 3 times out loud!\n";
// Lines 8 thru 31 only alphabetize the whole string. 12/6/2014
