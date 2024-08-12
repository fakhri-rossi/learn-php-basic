<?php

$a = 10;
$a2 = "10";
$b = 15;

var_dump($a == $a2);
var_dump($a === $a2 );
var_dump($a == $b);
var_dump($a === $b);

var_dump($a != $a2);
var_dump($a <> $a2);
var_dump($a !== $a2);

?>