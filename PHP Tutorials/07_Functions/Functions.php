<?php
// 1. Simple Function
function greet() {
    echo "Hello, World!\n";
}
greet(); // Output: Hello, World!

echo "\n";

// 2. Function with Parameters
function add($a, $b) {
    return $a + $b;
}
echo add(5, 10); // Output: 15

echo "\n";

// 3. Function with Default Parameters
function greetUser($name = "Guest") {
    echo "Hello, $name!\n";
}
greetUser("Alice"); // Output: Hello, Alice!
greetUser(); // Output: Hello, Guest!

echo "\n";

// 4. Function Returning a Value
function square($num) {
    return $num * $num;
}
echo square(4); // Output: 16

echo "\n";

// 5. Anonymous Function
$greet = function($name) {
    return "Hello, $name!";
};
echo $greet("Bob"); // Output: Hello, Bob!

echo "\n";

// 6. Arrow Function (PHP 7.4+)
$square = fn($x) => $x * $x;
echo $square(5); // Output: 25

?>
