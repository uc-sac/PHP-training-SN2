<?php
$a = 6.877687;
var_dump($a);
echo "<br>";
$b = 687;
var_dump($b);
echo "<br>";
$c = "Hello";
echo var_dump($c);
echo "<br>";
$d = array("9","8","7");
var_dump($d);
echo "<br>";

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("black", "Volvo");
  echo $myCar -> message();
  echo "<br>";
  $myCar = new Car("red", "Toyota");
  echo $myCar -> message();
?>