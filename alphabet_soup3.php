<?php

// 12/8/2014 This finally works as required.

// Create a function alphabet_soup($str) that accepts a 
// string and will return the string in alphabetical order. 
// E.g. "hello world" becomes "ehllo dlorw". So make sure 
// your function separates and alphabetizes each word separately.

// *12/8/2014 implode each word separately

function alphabet_soup ($string) 
{
	$array = explode(" ", $string); // bigger array
	foreach ($array as $wordSplit) { // loops each value
		$wordSplit = str_split($wordSplit);
    	sort($wordSplit);
    	$wordSplit = implode("", $wordSplit); // each word back to string
    	$sortedArray[] = $wordSplit; // smaller array of sorted word
	}
	$wordSplit = implode (" ", $sortedArray); // keep space here
	// var_dump($wordSplit);
	return ($wordSplit);
}

echo 'Enter your text: ';
$string = strtolower(trim(fgets(STDIN)));
// alphabet_soup ($string);
// array_walk($array, alphabet_soup);
	// $count = count ($array);

$newString = alphabet_soup ($string);
// var_dump($newString);
echo $newString . PHP_EOL;
echo "Now try saying that 3 times out loud!\n";
// Lines 12 thru 35 alphabetizes each word. 12/8/2014
