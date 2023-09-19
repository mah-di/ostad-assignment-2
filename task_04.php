<?php

print("================================ Task 4 ================================\n\n");

function fibonacci(int $series_length = 15): void
{
    $prev_num1 = 0;
    $prev_num2 = 1;

    printf("First %d numbers in the Fibonacci series are:\n", $series_length);

    for ($i = 1; $i <= $series_length; $i++)
    {
        if ($i == 1)
        {
            print("$prev_num1 ");

            continue;
        }
        elseif ($i == 2)
        {
            print("$prev_num2 ");

            continue;
        }

        $curr_num = $prev_num1 + $prev_num2;
        
        print("$curr_num ");

        $prev_num1 = $prev_num2;

        $prev_num2 = $curr_num;
    }
}

fibonacci(15);
