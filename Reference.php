<?php
// assign by reference
$name = "Idad";

$otherName = &$name;
$otherName = "Eko";

echo $name . PHP_EOL;

//pass by reference
function increment(int &$value)
{
    $value++;
}

$counter=1;
increment($counter);

echo $counter . PHP_EOL ;

//returning reference
function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 300;

$b = &getValue();
echo $b . PHP_EOL ;
