<?php

function sayHello($first, $last = "Anonymous")
{
    echo "Hello $first $last" . PHP_EOL;
}

sayHello("Idad");
sayHello("Rusdiana");
sayHello("Idad","Ganteung");

function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum(100, 100);
sum("100", "100");
sum(true, false);

//example variable-length argument list
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total ". implode(" + ", $values) . " = $total" . PHP_EOL;
}

sumAll(1, 2, 3, 4, 5);