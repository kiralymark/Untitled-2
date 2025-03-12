<?php
$numbers = [10, 25, 30, 45, 50, 65, 70, 85, 90];

function linearSearch($array, $searchValue) {
    $found = false;
    
    foreach ($array as $index => $value) {
        if ($value == $searchValue) {
            echo "Value $value found at index $index.\n";
            $found = true;
        }
    }
    
    if (!$found) {
        echo "Value $searchValue not found in the array.\n";
    }
}


$searchValue = intval(readline("Enter the value to search: "));

if (is_numeric($searchValue)) {
    linearSearch($numbers, (int)$searchValue);
} else {
    echo "Please enter a valid numeric value.\n";
}
?>
