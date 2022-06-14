<?php
class Fruit {
  // Properties
  private $name;
  protected $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  
  function get_name() {
    return $this->name;
  }
  
}

class Apple extends Fruit {
    function set_color($color) {
        $this->color = $color;
    }
    
    function get_color() {
        return $this->color;
    }
}

$apple = new Apple();

$apple->set_name('Apple');
$apple->set_color("Red");

//$banana->set_name('Banana');

echo "Ürün Adı: " . $apple->get_name() . "\n";
echo "Ürün Rengi: " . $apple->get_color() . "\n";
//echo $banana->get_name();
?>
