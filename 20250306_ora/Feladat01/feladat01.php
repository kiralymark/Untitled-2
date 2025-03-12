<?php
$sampleString = "Hello, welcome to PHP programming!";       // ? extra: convert from uppercase to lowercase 

echo "Enter a character to search: ";

$char = trim(readline("")); // Get input and remove extra spaces

if (strlen($char) !== 1) {
    echo "Please enter a single character.";
    exit;
}

$positions = [];
for ($i = 0; $i < strlen($sampleString); $i++) {
    if ($sampleString[$i] === $char) {
        $positions[] = $i;
    }
}

if (!empty($positions)) {
    echo "Character '$char' found at index: " . implode(", ", $positions);
} else {
    echo "Character '$char' not found in the string.";
}
?>
