<?php
function printFibonacciSeries($n) {
    $first = 1;
    $second = 2;

    for ($i = 1; $i <= $n; $i++) {
        echo $first . " ";

        // Calculate the next Fibonacci number
        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}

// Call the function to print the first 15 Fibonacci numbers
printFibonacciSeries(15);
