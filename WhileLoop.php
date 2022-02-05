<?php

$counter = 1;

while($counter <= 10){
    echo "Hello For Loop : " . $counter . PHP_EOL;
    $counter++;
}

//Sintax Alternative
$counter = 1;
while($counter <= 10):
    echo "Hello For Loop : " . $counter . PHP_EOL;
    $counter++;
endwhile;
