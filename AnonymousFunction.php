<?php

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodBye("Eko", function (string $name)
{
    return strtoupper($name);
});

//pakai variable function juga bisa
$filterFunction = function(string $name): string
{
    return strtoupper($name);
};

sayGoodBye("Eko", $filterFunction);

//mengakses variable luar
$firstName = "Idad";
$lastName = "Rusdiana";

$sayHelloIdad = function () use ($firstName, $lastName){
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloIdad();
