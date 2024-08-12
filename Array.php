<?php

$arr = array(1, 2, 3, 4);
$arr2 = ["Eko", 5, "tyo"];

var_dump($arr);
var_dump($arr2);

// add data to array, (new index)
$arr[] = 5.5;
var_dump($arr);

// delete data, the index also will be deleted, affected index after
unset($arr[0]);
var_dump($arr);

var_dump($arr);
var_dump($arr2);

// array length
echo "\nArray length: ";
echo count($arr);

// Array as Map
$student = array(
  "id" => "121212",
  "name" => "Fakhri Rossi",
  "age" => 19
);

$student2 = [
  "id" => "232323",
  "name" => "Rossi Fakhri",
  "age" => 19,
];

var_dump($student);
var_dump($student2);

// Array in Array
$matrix = [
  [ 1, 1, 2 ],
  [ 4, 3, 1 ],
  [ 3, 2, 7 ]
];

var_dump($matrix);
