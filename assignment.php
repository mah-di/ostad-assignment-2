<?php

print("================================ Task 1 ================================\n\n\n");

function loop($start = 0, $end = 20, $step = 2)
{
    print("Even numbers between 1-20 using function:\n");

    for ($i = $start; $i <= $end; $i += $step)
    {
        if ($i == 0) continue;

        if ($i % 2 == 0) printf("%d ", $i);
    }
}

loop();

print("\n\nEven numbers between 1-20 using while loop:\n");

$num = 0;

while ($num <= 20)
{
    if ($num !== 0 && $num % 2 == 0) printf("%d ", $num);

    $num += 2;
}

print("\n\nEven numbers between 1-20 using do-while loop:\n");

$num = 0;

do {
    if ($num !== 0 && $num % 2 == 0) printf("%d ", $num);

    $num += 2;
} while ($num <= 20);


print("\n\n\n================================ Task 2 ================================\n\n\n");

print("Numbers from 1-50 without the multiples of 5:\n");

for ($i = 0; $i <=50; $i++)
{
    if ($i % 5 == 0) continue;

    printf("%d ", $i);
}



print("\n\n\n================================ Task 3 ================================\n\n\n");

$series_length = 10;

$prev_num1 = 0;
$prev_num2 = 1;

printf("First %d numbers in the Fibonacci series are:\n%d %d ", $series_length, $prev_num1, $prev_num2);

for ($i = 3; $i <= $series_length; $i++)
{
    $curr_num = $prev_num1 + $prev_num2;

    if ($curr_num > 100) break;
    
    print("$curr_num ");

    $prev_num1 = $prev_num2;

    $prev_num2 = $curr_num;
}



print("\n\n\n================================ Task 4 ================================\n\n\n");

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
