<?php

$name = "Rossi";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "Is Name null? ";
var_dump(is_null($name));
echo "\n";

$name = "Rossi";

echo "Is Name null? ";
var_dump(is_null($name));
echo "\n";


// delete variable
$contoh = "Contohh";
unset($contoh);

// echo $contoh; // shall error
var_dump(isset($contoh));