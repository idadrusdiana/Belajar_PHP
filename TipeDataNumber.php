<?php

echo "Decimal :";
var_dump(1234);
echo "Octal :";
var_dump(0123);
echo "Hexadecimal :";
var_dump(0x1A);
echo "Binary :";
var_dump(0b11111111);
echo "Underscore di Number :";
var_dump(1_234_567);

echo "Floating Point : ";
var_dump(1.234);
echo "Floating Point dengan E notation Plus (1.7 x 1000) : ";
var_dump(1.7e3);
echo "Floating Point dengan E notation Minus (1.7 x 0.001) : ";
var_dump(1.7e-3);
echo "Underscore di Floating Point :";
var_dump(1_234.567);
echo "Integer Overflow 64 bit : ";
var_dump(9223372036854775807);
echo "Integer Overflow 64 bit : "; //yang ini melebihi kapasitas  tipe datanya jadi berubah menjadi float
var_dump(9223372036854775808);





