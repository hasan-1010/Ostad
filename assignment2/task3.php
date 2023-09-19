<?php
/* =======================================================================================
** Task 3: Break on Condition
**
** Write a PHP program that calculates and prints the first 10 Fibonacci numbers.  
** But, if a Fibonacci number is greater than 100, break out of the loop using the break statement. 
=========================================================================================*/

function fibonacci(int $first, int $second, int $length)
{
    for ($i = 1; $i <= $length; $i++) {
        if ($first > 100) break;
        echo $first . ' ';
        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}
fibonacci(1, 1, 10);
// Output: 1 1 2 3 5 8 13 21 34 55
echo "\n";
fibonacci(2, 10, 10);
// Output: 2 10 12 22 34 56 90 