<?php

print("================================ Task 1 ================================\n\n");

function loop(int $start = 0, int $end = 20, int $step = 2): void
{
    print("Even numbers between 1-20 using for loop inside a function:\n");

    for ($i = $start; $i <= $end; $i += $step)
    {
        if ($i == 0) continue;

        if ($i % 2 == 0) printf("%d ", $i);
    }
}

loop(0, 20, 2);

print("\n\nEven numbers between 1-20 using while loop:\n");

$start = 0;
$end = 20;
$step = 2;

while ($start <= $end)
{
    if ($start !== 0 && $start % 2 == 0) printf("%d ", $start);

    $start += $step;
}

print("\n\nEven numbers between 1-20 using do-while loop:\n");

$start = 0;

do {
    if ($start !== 0 && $start % 2 == 0) printf("%d ", $start);

    $start += $step;
} while ($start <= $end);
