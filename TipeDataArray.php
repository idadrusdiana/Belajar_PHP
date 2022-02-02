<?php

$values = array(18, 9, 8, 7, 5);
var_dump($values);

$names = ["Idad", "Rusdiana", "Ganteung"];
var_dump($names[0]);
$names[0] = "Dadi";
var_dump($names);
unset($names[1]);
var_dump($names);
$names[] = "Idad";
var_dump($names);
$names[] = "Jaka";
var_dump($names);
var_dump(count($names));



//array sebagai map
$idad = array(
    "id" => "Idad",
    "name" => "Idad Rusdiana",
    "age" => 30,
    "address" => array(
        "city" => "Bandung",
        "country" => "Indonesia"
    )
);
var_dump($idad["name"]);
var_dump($idad["address"]["country"]); // cara manggil data array di dalam array
//bisa juga menggunakan kurung sikut [] langsung
$rusdiana = [
    "id" => "Rusdiana",
    "name" => "Rusdiana Idad",
    "age" => 25,
    "address" => [               //array di dalam array
        "city" => "Bandung",
        "country" => "Indonesia"
    ]
];
var_dump($rusdiana["name"]);
var_dump($idad["address"]["country"]);