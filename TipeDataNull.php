<?php

$name = "Idad";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "Is name Null ? : ";
var_dump(is_null($name));
echo "\n";

$contoh = "Idad";
unset($contoh);
var_dump(isset($contoh));