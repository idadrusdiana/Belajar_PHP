<?php

$names = ["Idad", "Rusdiana", "Ganteung"];
//cara menggunakan for
for ($i=0; $i < count($names); $i++) { 
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

//untuk manggil data Array disarankan menggunakan foreach
//menggunakan foreach supaya simple (tidak butuh indexnya)
foreach ($names as $name) {
    echo "Data $name" . PHP_EOL;
}

//menggunakan foreach supaya simple (kalau butuh indexnya)
foreach ($names as $index => $name) {
    echo "Data ke $index = $name" . PHP_EOL;
}

//Kalau key nya custom, bisa menggunakan
$person =[
    "first_name" => "Idad",
    "middle_name" => "Rusdiana",
    "last_name" => "Ganteung",
];

foreach ($person as $key => $value){
    echo "$key : $value" . PHP_EOL;
}