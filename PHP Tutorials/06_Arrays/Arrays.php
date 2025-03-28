<?php
// 1. Indexed Array
$fruits = ["Apple", "Banana", "Cherry"];
echo $fruits[0]; // Output: Apple

echo "\n";

// 2. Associative Array
$ages = ["Alice" => 25, "Bob" => 30, "Charlie" => 35];
echo $ages["Bob"]; // Output: 30

echo "\n";

// 3. Multidimensional Array
$students = [
    ["John", 20, "A"],
    ["Alice", 22, "B"],
    ["Bob", 21, "C"]
];
echo $students[0][0] . " - " . $students[0][2]; // Output: John - A

echo "\n";

// 4. Adding Elements to an Array
$fruits[] = "Mango"; // Adds Mango at the end
print_r($fruits); // Output: Array ( [0] => Apple [1] => Banana [2] => Cherry [3] => Mango )

echo "\n";

// 5. Removing Elements
unset($fruits[1]); // Removes "Banana"
print_r($fruits); // Output: Array ( [0] => Apple [2] => Cherry [3] => Mango )

echo "\n";

// 6. Looping Through Arrays
foreach ($ages as $name => $age) {
    echo "$name is $age years old.\n";
}
// Output: 
// Alice is 25 years old.
// Bob is 30 years old.
// Charlie is 35 years old.

?>
