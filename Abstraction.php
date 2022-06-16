<?php
abstract class Vehicle {
	
	//abstract method
	public abstract function capacity($capacity);

	public abstract function motorPower($motorHP = 50);
}

/**
 * child class Po set to abstract
 * as it is not implementing the abstract method foo()
 */
class Car extends Vehicle {
	
	//implemented method
	public function capacity($capacity) {
		echo "A car capacity is: $capacity\n";
	}
	
	public function motorPower($motorHP = 200) {
	    echo "A car motor power is: $motorHP HP\n";
	}
}

class Bicycle extends Vehicle {
	
	//implemented method
	public function capacity($capacity) {
		echo "A bicycle capacity is: $capacity\n";
	}
	
	public function motorPower($motorHP = 100) {
	    echo "A bicycle motor power is: $motorHP HP\n";
	}
}


$car = new Car();
echo $car->capacity(4);
echo $car->motorPower(150);

$bicycle = new Bicycle();
echo $bicycle->capacity(2);
echo $bicycle->motorPower(20);
