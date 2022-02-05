<?php

$name = "Idad Rusdiana Ganteung";

echo "Name : " . $name . PHP_EOL; //PHP_EOL disini adalah buat enter seperti "\n"
echo "Age : " . 25 . PHP_EOL; 

$valueString = (string)100; //dari number menjadi string
var_dump($valueString);

$valueInt = (int)"100"; //dari string mnejadi number
var_dump($valueInt);

$valueFloat = (float)"1.01";
var_dump($valueFloat);

//Mengkases Karakter
$name = "Idad";
echo $name[0]. PHP_EOL;
echo $name[1]. PHP_EOL;
echo $name[2]. PHP_EOL;
echo $name[3]. PHP_EOL;
// echo $name[4]. PHP_EOL; melebihi karakter di string 

$name = "Idad";
echo "Hello $name, Selamat Belajar" . PHP_EOL;

$var = "Idad";
echo "This is {$var}s" . PHP_EOL;