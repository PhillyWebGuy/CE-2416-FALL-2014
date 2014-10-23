<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

/*Declare a class named “car”
Set properties named “year”, “make”, and “model”
Instantiate the class by assigning to a variable, pass values to properties
Investigate the object using var_dump()
*/


$myCar = new Car("2014", "Hyundai", "Tucson");

echo "<PRE>";
$myCar->add_car();
var_dump($myCar);
echo "</PRE>";

class car {
    
 public $year, $make, $model;
 
 function add_car(){
     $this->year = "2016";
     echo "Car added.";
 }
    
}