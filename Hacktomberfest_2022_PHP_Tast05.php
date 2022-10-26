<?php

class Fruit {
//   creating variables with different modifiers
 public $name;
 protected $color;
 private $weight;
  
}

// implementing the class 
$mango = new Fruit();
$mango->name = 'Mango'; // OK
$mango->color = 'Yellow'; // ERROR
$mango->weight = '300'; // ERROR

?>
