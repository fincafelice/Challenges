<?php

// Create a function alphabet_soup($str) that accepts a 
// string and will return the string in alphabetical order. 
// E.g. "hello world" becomes "ehllo dlorw". So make sure 
// your function separates and alphabetizes each word separately.

function alphabet_soup ($string) 
{
	$array = explode(" ", $string);
    sort($array);
	// var_dump($array);
	return ($array);
}

echo 'Enter your text: ';
$string = strtolower(trim(fgets(STDIN)));
// var_dump($newString);
$newString = alphabet_soup ($string);
$newString = implode (" ", $newString);
echo $newString . PHP_EOL;
echo "Now try saying that 3 times out loud!\n";
// Lines 8 thru 22 only alphabetize the words. 12/6/2014