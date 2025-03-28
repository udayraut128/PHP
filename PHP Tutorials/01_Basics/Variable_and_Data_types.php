<?php
// 1. Variables in PHP
$name = "Uday";  // String
$age = 22;       // Integer
$price = 99.99;  // Float
$isStudent = true; // Boolean

// 2. Scalar Data Types
// String
$text1 = "Hello, World!";
$text2 = 'PHP is fun!';

// Integer
$num1 = 100;
$num2 = -50;

// Float
$price = 99.99;
$scientific = 2.5e3; // 2.5 * 10^3 = 2500

// Boolean
$isAdmin = true;
$isGuest = false;

// 3. Compound Data Types
// Array
$fruits = array("Apple", "Banana", "Mango");

// Object
class Car {
    public $brand;
    public function __construct($brand) {
        $this->brand = $brand;
    }
}
$myCar = new Car("Tesla");

// 4. Special Data Types
// NULL
$var = NULL;

// Resource
$file = fopen("test.txt", "r");

// 5. Checking Data Types
echo gettype($text1); // Outputs: string
var_dump($num1); // Outputs: int(100)

// 6. Type Casting
$val = "100";  
$num = (int) $val; // Converts string to integer

// 7. Type Juggling
$sum = "10" + 5; // String "10" is automatically converted to an integer

// Output examples
echo $name . "\n";
echo $num1 . "\n";
echo $price . "\n";
echo $isAdmin ? "true" : "false";
echo "\n" . $fruits[0];
echo "\n" . $myCar->brand;
?>
