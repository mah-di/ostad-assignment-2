<?php

print("================================ Task 1 ================================\n\n");

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
