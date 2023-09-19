<?php
/* =======================================================================================
** Task 1: Looping with Increment using a Function
**
** Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a step of 2. 
** In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. 
** The function should take the arguments like start as 1, end as 20 and step as 2. 
** You must call the function to print.
** Also do the same using while loop and do-while loop also. 
=========================================================================================*/
// For Loop
function evenNumbers(int $start, int $end, int $step): array
{
    $numbers = [];
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) array_push($numbers, $i);
    }
    return $numbers;
}

$numbers = evenNumbers(0, 20, 2);
echo implode(', ', $numbers);
// Output: 0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20


echo "\n";
// While Loop
function evenNumbers2(int $start, int $end, int $step): array
{
    $numbers = [];
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 == 0) array_push($numbers, $i);
        $i += $step;
    }
    return $numbers;
}

$numbers = evenNumbers2(0, 40, 5);
echo implode(', ', $numbers);
// Output: 0, 10, 20, 30, 40

echo "\n";
// Do While Loop
function evenNumbers3(int $start, int $end, int $step): array
{
    $numbers = [];
    $i = $start;
    do {
        if ($i % 2 == 0) array_push($numbers, $i);
        $i += $step;
    } while ($i <= $end);
    return $numbers;
}

$numbers = evenNumbers2(2, 50, 3);
echo implode(', ', $numbers);
// Output: 2, 8, 14, 20, 26, 32, 38, 44, 50