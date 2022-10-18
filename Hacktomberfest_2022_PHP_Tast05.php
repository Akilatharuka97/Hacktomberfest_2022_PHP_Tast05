<?php
class Fruit {
 public $name;
 protected $color;
 private $weight;
}//missing bracket
$mango = new Fruit();
//comments are wrong
$mango->name = 'Mango'; // OK
$mango->color = 'Yellow'; // ERROR
$mango->weight = '300'; // ERROR
?>
