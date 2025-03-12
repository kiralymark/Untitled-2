<?php
$numbers = [50, 25, 70, 10, 90, 30, 85, 45, 65];

sort($numbers);

print_r($numbers);

function orderedLinearSearch($array, $searchValue) {
    $found = false;
    
    foreach ($array as $index => $value) {
        if ($value == $searchValue) {
            echo "Value $value found at index $index.\n";
            $found = true;
            break;
        } elseif ($value > $searchValue) {
            break;
        }
    }

    if (!$found) {
        echo "Value $searchValue not found in the array.\n";
    }
}

$searchValue = intval(readline("Enter the value to search: "));

if (is_numeric($searchValue)) {
    orderedLinearSearch($numbers, (int)$searchValue);
} else {
    echo "Please enter a valid numeric value.\n";
}
?>
