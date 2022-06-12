
<?php
class Fruit {
  // Properties
  public $name;
  public $color;
  public $price;


  function __construct($color, $name = "Varsayılan Ad", $price = "1 TL") 
  {

        //$this->name = "Varsayılan Ad";

      $this->name = $name;
      $this->color = $color;
      $this->price = $price;
  }
  
  function __destruct() {
      echo "\n $this->name adına sahip meyvenin rengi $this->color'dır";
  }

  // Methods
  function set_name($name) {
  	$this->name = $name;
  }


  function get_name() {
    return $this->name;
  }
  
  function set_color($color) {
  	$this->color = $color;
  }
  
  function get_color() {
  	return $this->color;
  }
}

$apple = new Fruit("Kırmızı");
$banana = new Fruit("Yellow");


//$apple->set_name("Apple");
//$apple->set_color('Kırmızı');

//$apple->name = "Mahmut";

//$banana->set_color('Yellow');

//$apple->name = "Elma";

echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
echo "<br>";
echo $banana->get_name();
echo "<br>";
echo $banana->get_color();
echo "<br>";



echo $apple->name;
?>
