<?php

//Array is a data structure to stores a collection of disimilar type of  data under a single variable in contigeous memory location.

$name1 = "Raj";
$name2 = "Subha";
$name3 = "Laxmi";

$name = ["Raj", "Subha", "Laxmi"];
// var_dump($name); //data-type and value
// echo in aaray : to print specific element
// print_r($name); //for compound data type

//1.Indexed array(index)
//2.Associativity array(key->value pair)
//3.Multidimensional array

$flowers = array("Tulips", "Periwinkles", "Daffodils", "Roses");
print_r($flowers);

$cars = [
    "branch" => "BMW",
    "model" => "X7",
    "price" => "5cr"
];
print_r($cars);

echo $flowers[1];
$flowers[1] = "Marigold";
$flowers[] = "Jashmin";
array_push($flowers, "Sunflowers");
print_r($flowers);

?>