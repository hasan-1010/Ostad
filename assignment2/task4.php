<?php
/* =======================================================================================
** Task 4: Fibonacci Series printing using a Function
**
** Write a PHP function to print the first 15 numbers in the Fibonacci series. 
** You should take this 15 as an argument of a function and use a for loop to generate these
** numbers and print them by calling the function.
=========================================================================================*/
function fibonacci(int $length)
{
    $first = 1;
    $second = 1;
    for ($i = 1; $i <= $length; $i++) {
        echo $first . ' ';
        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}
fibonacci(15);
// Output: 1 1 2 3 5 8 13 21 34 55 89 144 233 377 610