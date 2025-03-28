<?php
// 1. Arithmetic Operators
$a = 10;
$b = 5;
echo $a + $b;  // Addition: 15
echo $a - $b;  // Subtraction: 5
echo $a * $b;  // Multiplication: 50
echo $a / $b;  // Division: 2
echo $a % $b;  // Modulus: 0
echo $a ** $b; // Exponentiation: 100000

// 2. Assignment Operators
$x = 10;
$x += 5;  // Same as $x = $x + 5;
$x -= 3;  // Same as $x = $x - 3;
$x *= 2;  // Same as $x = $x * 2;
$x /= 4;  // Same as $x = $x / 4;
$x %= 3;  // Same as $x = $x % 3;

// 3. Comparison Operators
var_dump($a == $b);  // Equal (false)
var_dump($a === $b); // Identical (false)
var_dump($a != $b);  // Not equal (true)
var_dump($a <> $b);  // Not equal (true)
var_dump($a !== $b); // Not identical (true)
var_dump($a > $b);   // Greater than (true)
var_dump($a < $b);   // Less than (false)
var_dump($a >= $b);  // Greater than or equal (true)
var_dump($a <= $b);  // Less than or equal (false)

// 4. Logical Operators
$p = true;
$q = false;
var_dump($p && $q); // AND (false)
var_dump($p || $q); // OR (true)
var_dump(!$p);      // NOT (false)
var_dump($p xor $q); // XOR (true)

// 5. Increment/Decrement Operators
$num = 5;
echo ++$num; // Pre-increment: 6
echo $num++; // Post-increment: 6 (prints 6, then increases to 7)
echo --$num; // Pre-decrement: 6
echo $num--; // Post-decrement: 6 (prints 6, then decreases to 5)

// 6. String Operators
$str1 = "Hello";
$str2 = " World";
echo $str1 . $str2;  // Concatenation: "Hello World"
$str1 .= $str2;      // Append: "Hello World"

// 7. Array Operators
$arr1 = array("a" => 1, "b" => 2);
$arr2 = array("c" => 3, "d" => 4);
$result = $arr1 + $arr2;  // Union of arrays
var_dump($arr1 == $arr2); // Equal (false)
var_dump($arr1 === $arr2); // Identical (false)
var_dump($arr1 != $arr2);  // Not equal (true)
var_dump($arr1 <> $arr2);  // Not equal (true)
var_dump($arr1 !== $arr2); // Not identical (true)

// 8. Conditional (Ternary) Operator
$age = 20;
$message = ($age >= 18) ? "Adult" : "Minor";
echo $message;  // Outputs: "Adult"

// 9. Null Coalescing Operator (??)
$username = $_GET['user'] ?? 'Guest';
echo $username;  // If 'user' is not set, it prints "Guest"

// 10. Spaceship Operator (<=>)
echo 10 <=> 5; // Returns 1 (left is greater)
echo 5 <=> 10; // Returns -1 (right is greater)
echo 10 <=> 10; // Returns 0 (both are equal)
?>
