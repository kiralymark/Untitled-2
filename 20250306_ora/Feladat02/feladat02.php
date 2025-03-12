<?php
echo "Enter a string: ";

$input = trim(readline(""));

$charArray = str_split($input);

sort($charArray);

$sortedString = implode("", $charArray);

echo "Sorted string: " . $sortedString . "\n";
?>
