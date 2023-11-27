<?php
// Define the number of terms in the Fibonacci series you want to print
$terms = 10;

// Initialize the first two terms of the series
$firstTerm = 0;
$secondTerm = 1;

// Display a message to indicate the purpose of the code
echo "Fibonacci Series for the first $terms terms: ";

// Loop to generate and print the Fibonacci series
for ($i = 1; $i <= $terms; $i++) {
    echo $firstTerm;

    // Add a comma and space if more terms are to be printed
    if ($i < $terms) {
        echo ", ";
    }

    // Calculate the next term in the series
    $nextTerm = $firstTerm + $secondTerm;

    // Update the first and second terms for the next iteration
    $firstTerm = $secondTerm;
    $secondTerm = $nextTerm;
}
?>