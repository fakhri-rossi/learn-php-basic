<?php

// Integer
echo "\n----- Integer -----\n";

echo "Decimal (base 10) : ";
var_dump(1234);

echo "Octal: (base 8) ";
var_dump(01234);

echo "Hexadecimal (base 16) : ";
var_dump(0x1A);

echo "Binary: (base 2) ";
var_dump(0b11111111);

echo "Underscore in Number: ";
var_dump(1_200_000);
echo 8 * 1_000_000;


// float
echo "\n\n----- Float -----\n";

echo "Floating Point: ";
var_dump(1.234);

echo "Floating Point with E notation Plus (1.2 x 1000): ";
var_dump(1.2e3);

echo "Floating Point with E notation minus (1.2 x 0.001): ";
var_dump(1.2e-3);

echo "Underscore in Floating Point: ";
var_dump(1_234.567);

// Integer Overflow
echo "Integer Overflow: ";
// 64 bit limit: 9223372036854775807
var_dump(9223372036854775808);
