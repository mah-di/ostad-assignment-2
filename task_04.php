<?php

print("================================ Task 4 ================================\n\n");

function fibonacci(int $series_length = 15): void
{
    $prev_num1 = 0;
    $prev_num2 = 1;

    printf("First %d numbers in the Fibonacci series are:\n%d %d ", $series_length, $prev_num1, $prev_num2);

    for ($i = 3; $i <= $series_length; $i++)
    {
        $curr_num = $prev_num1 + $prev_num2;
        
        print("$curr_num ");

        $prev_num1 = $prev_num2;

        $prev_num2 = $curr_num;
    }
}

fibonacci(15);
