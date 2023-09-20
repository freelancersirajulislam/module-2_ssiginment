<?php
$first = 1;
$second = 2;
$count = 0;

while ($count <= 10) {
    if ($first > 100) {
        break; 
    }

    echo $first . " ";

    $next = $first + $second;
    $first = $second;
    $second = $next;

    $count++;
}
