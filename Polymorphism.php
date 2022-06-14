<?php
    interface Machine {
        public function calcTask();
        public function calcCevre();
    }
	   
	   interface Hacim {
	       public function calcHacim();
	   }
	   
	   class Circle implements Machine, Hacim {
	        private $radius;	        
	       
	       /**
	        * Author:
	        * */
	        public function calcHacim(){
	           return "Bu ikinci interface";
            }
	      
	        public function __construct($radius){
	            $this -> radius = $radius;
	        }

	        public function calcTask(){
	            return $this -> radius * $this -> radius * pi();
	        }
	        
	        public function calcCevre() {
	            return $this->radius * 2 * pi();
	        }
	   }
	   
	   
	   class Rectangle implements Machine {
	      private $width;
	      private $height;
	      public function __construct($width, $height){
	         $this -> width = $width;
	         $this -> height = $height;
	      }
	      public function calcTask(){
	         return $this -> width * $this -> height;
	      }
	      
	      public function calcCevre() {
	          return 2 * $this->height + 2 * $this->width;
	      }
	   }
	   
	   $mycirc = new Circle(3);
	   $myrect = new Rectangle(3,4);
	   
	   echo "Daire Alan: "  . $mycirc->calcTask() . "\n";
	   echo "Dikdörtgen Alan: " . $myrect->calcTask() . "\n";
       echo "Daire Çevre: "  . $mycirc->calcCevre() . "\n";
       echo "Dikdörtgen Çevre: " . $myrect->calcCevre() . "\n";
       echo "Daire Hacim: " . $mycirc->calcHacim() . "\n";
?>
