<?php
// Define the number of rows in the inverted right triangle
$rows = 5;

// Loop to create the inverted right triangle pattern
for ($i = $rows; $i >= 1; $i--) {
	// Inner loop to print asterisks
	for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "\n";
}
?>