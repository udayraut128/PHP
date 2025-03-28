<?php
// 1. String Declaration
$str1 = "Hello, World!";
$str2 = 'PHP is awesome!';
echo $str1 . "\n"; // Output: Hello, World!
echo $str2 . "\n"; // Output: PHP is awesome!

echo "\n";

// 2. String Concatenation
$firstName = "John";
$lastName = "Doe";
$fullName = $firstName . " " . $lastName;
echo $fullName . "\n"; // Output: John Doe

echo "\n";

// 3. String Interpolation (Only with Double Quotes)
$language = "PHP";
echo "I am learning $language.\n"; // Output: I am learning PHP.
echo 'I am learning $language.\n'; // Output: I am learning $language.\n

echo "\n";

// 4. String Functions
$str = "Hello PHP!";

echo strlen($str) . "\n"; // Output: 10 (String Length)
echo strrev($str) . "\n"; // Output: !PHP olleH (Reverse String)
echo strtoupper($str) . "\n"; // Output: HELLO PHP! (Uppercase)
echo strtolower($str) . "\n"; // Output: hello php! (Lowercase)
echo ucfirst("php is fun") . "\n"; // Output: Php is fun (First letter uppercase)
echo lcfirst("PHP is fun") . "\n"; // Output: pHP is fun (First letter lowercase)

echo "\n";

// 5. Substring Extraction
echo substr($str, 6, 3) . "\n"; // Output: PHP (Extract 3 characters from index 6)

echo "\n";

// 6. String Replace
echo str_replace("PHP", "JavaScript", $str) . "\n"; // Output: Hello JavaScript!

echo "\n";

// 7. String Position
echo strpos($str, "PHP") . "\n"; // Output: 6 (Position of "PHP" in the string)

?>
