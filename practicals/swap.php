<?php
// Intialize two numbers
$number1 = 10;
$number2 = 20;

echo "Before swapping: ";
echo "\nNumber 1: " . $number1;
echo "\nNumber 2: " . $number2;

// Swapping the numbers without a temporary variable
$number1 = $number1 + $number2;
$number2 = $number1 - $number2;
$number1 = $number1 - $number2;

echo "\nAfter swapping: ";
echo "\nNumber 1: " . $number1;
echo "\nNumber 2: " . $number2;
?>