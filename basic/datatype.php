<?php
// interger data type
echo "decimal : ";
var_dump(1234);

echo "octal : ";
var_dump(0123);

echo "decimal : ";
var_dump(0x1A);

echo "binary : ";
var_dump(0b111111);

// floating point data type

echo "floating point : ";
var_dump(1.234);

// interger overflow

echo "integer overflow 32 bit : ";
var_dump(2147483647); // limit

echo "interger overflow 64 bit : ";
var_dump(9223372036854775807); // limit
var_dump(9223372036854775808); // being float because pass the limit

// boolean data type, case insensitive

echo "True : ";
var_dump(true);

echo "False : ";
var_dump(false);

$withoutString = 1;
$withString = "1";

var_dump($withoutString==$withString);

// string data type
// double quete has more features than single quote

echo 'name : ';
echo 'Ridlo achmad ghifary'. PHP_EOL;

echo "name : ";
echo "Ridlo\n achmad\n ghifary". PHP_EOL; // doing escape sequence