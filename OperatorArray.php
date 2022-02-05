<?php

$first = [
    "first_name" => "Idad"
];

$last = [
    "first_name" => "Rusdi ana",
    "last_name" => "Ganteung"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Idad",
    "last_name" => "Rusdiana"
];

$b = [
    "last_name" =>  "Rusdiana",
    "first_name" => "Idad"
];

var_dump($a == $b); //union
var_dump($a === $b); //identify
var_dump($a != $b); //inequality
var_dump($a <> $b); //inequality
var_dump($a !== $b); //nonIdentify
