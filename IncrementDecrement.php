<?php

$a = 10;
$b = ++$a;

var_dump($b);
var_dump($a);

$c = $a++;

var_dump($c);
var_dump($a);
var_dump($c);

// and so -- as decrement

?>