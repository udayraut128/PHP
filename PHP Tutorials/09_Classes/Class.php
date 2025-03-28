<?php
// 1. Class Declaration
class Car {
    public $brand;  // Property
    public $color;

    // Constructor
    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

    // Method
    public function getDetails() {
        return "Brand: " . $this->brand . ", Color: " . $this->color;
    }
}

// Creating Objects
$car1 = new Car("Toyota", "Red");
$car2 = new Car("Honda", "Blue");

echo $car1->getDetails() . "\n"; // Output: Brand: Toyota, Color: Red
echo $car2->getDetails() . "\n"; // Output: Brand: Honda, Color: Blue

echo "\n";

// 2. Inheritance
class ElectricCar extends Car {
    public $batteryLife;

    public function __construct($brand, $color, $batteryLife) {
        parent::__construct($brand, $color);
        $this->batteryLife = $batteryLife;
    }

    public function getElectricCarDetails() {
        return parent::getDetails() . ", Battery Life: " . $this->batteryLife . " hours";
    }
}

$tesla = new ElectricCar("Tesla", "Black", 12);
echo $tesla->getElectricCarDetails() . "\n"; // Output: Brand: Tesla, Color: Black, Battery Life: 12 hours

echo "\n";

// 3. Access Modifiers
class Person {
    public $name;  // Public: Accessible everywhere
    private $age;  // Private: Accessible only within class
    protected $salary;  // Protected: Accessible in class & subclasses

    public function __construct($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getAge() {
        return $this->age; // Can be accessed within class
    }
}

$person = new Person("John", 30, 5000);
echo $person->name . "\n"; // Output: John
echo $person->getAge() . "\n"; // Output: 30

echo "\n";

// 4. Static Methods and Properties
class MathOperations {
    public static $pi = 3.1416;

    public static function square($num) {
        return $num * $num;
    }
}

echo MathOperations::$pi . "\n"; // Output: 3.1416
echo MathOperations::square(5) . "\n"; // Output: 25

echo "\n";

// 5. Abstract Classes
abstract class Animal {
    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        return "Bark!";
    }
}

$dog = new Dog();
echo $dog->makeSound() . "\n"; // Output: Bark!

echo "\n";

// 6. Interfaces
interface Shape {
    public function area();
}

class Rectangle implements Shape {
    private $length, $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function area() {
        return $this->length * $this->width;
    }
}

$rectangle = new Rectangle(10, 5);
echo "Rectangle Area: " . $rectangle->area() . "\n"; // Output: Rectangle Area: 50

echo "\n";

// 7. Traits (Multiple Inheritance Alternative)
trait Logger {
    public function log($message) {
        echo "Log: " . $message . "\n";
    }
}

class User {
    use Logger;
}

$user = new User();
$user->log("User logged in."); // Output: Log: User logged in.

?>
