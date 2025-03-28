<?php
// 1. Variable Variables
$varName = "hello";
$$varName = "World"; 
echo $hello . "\n"; // Output: World

// 2. Type Casting
$num = "10";
$intNum = (int)$num;
echo $intNum . "\n"; // Output: 10

// 3. Null Coalescing Operator (??)
$username = $_GET['user'] ?? "Guest";
echo $username . "\n"; // Output: Guest if 'user' is not set

// 4. Ternary Operator
$age = 18;
$status = ($age >= 18) ? "Adult" : "Minor";
echo $status . "\n"; // Output: Adult

// 5. Spaceship Operator (<=>)
echo (5 <=> 3) . "\n"; // Output: 1 (left is greater)
echo (5 <=> 5) . "\n"; // Output: 0 (both are equal)
echo (3 <=> 5) . "\n"; // Output: -1 (right is greater)

// 6. Generate Random Number
echo rand(1, 100) . "\n"; // Output: Random number between 1 and 100

// 7. Check Variable Type
$var = 10.5;
echo gettype($var) . "\n"; // Output: double

// 8. String to Array Conversion
$str = "PHP is awesome";
$arr = explode(" ", $str);
print_r($arr); // Output: Array ( [0] => PHP [1] => is [2] => awesome )

// 9. Array to String Conversion
$joinedStr = implode("-", $arr);
echo $joinedStr . "\n"; // Output: PHP-is-awesome

// 10. Check if Variable is Set
$var = "Hello";
if (isset($var)) {
    echo "Variable is set\n"; // Output: Variable is set
}

// 11. Check if Variable is Empty
$emptyVar = "";
if (empty($emptyVar)) {
    echo "Variable is empty\n"; // Output: Variable is empty
}

// 12. Suppress Errors using @
$result = @file_get_contents("non_existing_file.txt");
if ($result === false) {
    echo "File not found\n"; // Output: File not found
}

// 13. Execute Shell Command
$output = shell_exec("ls");
echo $output; // Output: List of files (Linux)

// 14. Convert JSON to PHP Array
$jsonStr = '{"name": "John", "age": 25}';
$phpArray = json_decode($jsonStr, true);
print_r($phpArray); // Output: Array ( [name] => John [age] => 25 )

// 15. Convert PHP Array to JSON
$jsonOutput = json_encode($phpArray);
echo $jsonOutput . "\n"; // Output: {"name":"John","age":25}

// 16. Get Current Timestamp
echo time() . "\n"; // Output: Unix timestamp

// 17. Get Current Date and Time
echo date("Y-m-d H:i:s") . "\n"; // Output: 2025-03-25 12:34:56

// 18. Create and Read a File
file_put_contents("example.txt", "Hello, PHP!");
$content = file_get_contents("example.txt");
echo $content . "\n"; // Output: Hello, PHP!

// 19. Remove a File
unlink("example.txt");

// 20. Redirect to Another Page
// header("Location: https://www.example.com");
?>
