<?php

$haystack = ['Marc Andreessen', 'Tim Berners-Lee', 'Len Bosack', 'Steve Case', 'Vint Cerf', 'Len Kleinrock', 'J.C.R. Licklider', 'Bob Metcalfe', 'Ray Tomlinson'];

$query = 'Steve Case';

$result = array_search($query, $haystack);

echo "$result" . PHP_EOL;

if ($result) {
	echo "You found: {$haystack[$result]}" . PHP_EOL;
}