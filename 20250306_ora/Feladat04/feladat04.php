<?php
function insertIntoHashTable(&$hashTable, $value) {
    $size = count($hashTable);

    $index = $value % $size;
    $startIndex = $index;

    while ($hashTable[$index] !== null) {

        $index = ($index + 1) % $size;

        if ($index == $startIndex) {
            echo "Hash table is full. Cannot insert value: $value\n";
            return;
        }
    }

    $hashTable[$index] = $value;
}

$sizeInput = readline("Enter hash table size: ");
$size = intval($sizeInput);

$hashTable = array_fill(0, $size, null);

$valuesInput = readline("Enter hash values (separated by spaces): ");
$values = explode(" ", $valuesInput);

foreach ($values as $value) {

    $intValue = intval($value);
    insertIntoHashTable($hashTable, $intValue);
}

echo "\nHash Table:\n";
foreach ($hashTable as $index => $value) {

    if ($value === null) {
        $value = "-";
    }
    echo "Index $index: $value\n";
}
?>
