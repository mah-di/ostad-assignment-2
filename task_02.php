<?php

print("================================ Task 2 ================================\n\n");

print("Numbers from 1-50 without the multiples of 5:\n");

for ($i = 0; $i <=50; $i++)
{
    if ($i % 5 == 0) continue;

    printf("%d ", $i);
}
