<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$myCar = new Car("1998", "Ford", "Mustang");
echo "--<PRE>";
var_dump($myCar);
echo "</PRE>";

class Car {
    
    public $year;
    private $make;
    protected $model;
    
	function __construct($year, $make, $model){
        $this->year = $year;
        $this->make = $make;
        $this->model = $model;
    }
    function save_user() {
	    echo "Save User code goes here";
    }
}
?>