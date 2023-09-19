<?php
/* =======================================================================================
** Task 2: Skip Multiples of 5
**
** Create a PHP script that prints numbers from 1 to 50 using a for loop. 
** However, when the loop encounters a multiple of 5, 
** it should skip that number using the continue statement and continue to the next iteration. 
=========================================================================================*/

for ($i = 1; $i <= 50; $i++) {
    if ($i % 5 == 0) continue;
    echo "$i\n";
}
/* Output:
1
2
3
4
6
7
8
9
11
12
13
14
16
17
18
19
21
22
23
24
26
27
28
29
31
32
33
34
36
37
38
39
41
42
43
44
46
47
48
49
*/