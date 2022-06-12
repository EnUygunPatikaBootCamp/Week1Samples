<?php

class Fruit {
  public $name;
  public $color;
  public $price;
  
  public function __construct() {
//    $this->name = $name;
//    $this->color = $color;
  }

  public function set_color($color) {
      $this->color = $color;
  }
  
  public function get_color() {
      return $this->color;
  }

  public function set_name($name) {
      $this->name = $name;
  }
  
  public function get_name() {
      return $this->name;
  }
  
  public function set_price($price) {
      $this->price = $price;
  }
  
  public function get_price() {
      return $this->price;
  }
  
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit {
  function __construct() {
      echo "Strawberry constructor \n";
  }    
    
  public function message() {
    echo "Am I a fruit or a berry? ";
  }
  
  public function intro() {
    //echo "The fruit is " . parent::get_name() . " and the color is " . parent::get_color() . ", and the price is" . parent::get_price(); 
    parent::intro(); echo " and the price is " . parent::get_price();
  }
  
}

$strawberry = new Strawberry();
$strawberry->set_price("4 TL");
$strawberry->set_color("Red");
$strawberry->set_name("Elma");
echo $strawberry->get_price() . "\n";

$strawberry->message();
$strawberry->intro();
?>