<?php

// Function using a for loop
function printEvenNumbers($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
    echo "\n";
}


// Function using a do-while loop
function printEvenNumbersUsingWhileLoop($start, $end, $step) {
    $current = $start;
    while ($current <= $end) {
        if ($current % 2 == 0) {
            echo $current . " ";
        }
        $current += $step;
    }
    echo "\n";
}

// Function using a do-while loop
function printEvenNumbersUsingDoWhileLoop($start, $end, $step) {
    $current = $start;
    do {
        if ($current % 2 == 0) {
            echo $current . " ";
        }
        $current += $step;
    } while ($current <= $end);
    echo "\n";
}

// Call the functions to print even numbers from 1 to 20 with a step of 2
$start = 2;
$end = 20;
$step = 2;

echo "Using for loop: ";
printEvenNumbers($start, $end, $step);

echo "Using while loop: ";
printEvenNumbersUsingWhileLoop($start, $end, $step);

echo "Using do-while loop: ";
printEvenNumbersUsingDoWhileLoop($start, $end, $step);

echo "\n";
echo "Completly for loop, while loop & do-while loop done";