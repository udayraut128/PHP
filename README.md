# PHP Cheat Sheet

## 1. Introduction to PHP
PHP (Hypertext Preprocessor) is a server-side scripting language designed for web development but also used as a general-purpose programming language.

## 2. Setup
To run PHP, install:
- **XAMPP/WAMP** (for local server setup)
- **PHP CLI** (for command-line execution)

Run a PHP file using:
```sh
php filename.php
```
Or place the file in the web server's directory and access it via `http://localhost/filename.php`.

## 3. PHP Syntax
Basic PHP syntax includes `<?php ... ?>` tags to enclose the PHP code.
```php
<?php
  echo "Hello, World!";
?>
```

## 4. Variables and Data Types
PHP supports various data types, including strings, integers, floats, booleans, arrays, and NULL.
```php
<?php
  $string = "Hello"; // String
  $integer = 10;     // Integer
  $float = 10.5;     // Float
  $boolean = true;   // Boolean
  $array = [1, 2, 3]; // Array
  $nullVar = null;    // NULL
?>
```

## 5. Constants
Constants are defined using the `define()` function and cannot be changed once set.
```php
<?php
  define("SITE_NAME", "CoderStudent");
  echo SITE_NAME;
?>
```

## 6. Operators
Operators allow performing arithmetic, comparison, logical, and assignment operations.
```php
<?php
  $a = 10;
  $b = 5;
  echo $a + $b; // Addition
  echo $a - $b; // Subtraction
  echo $a * $b; // Multiplication
  echo $a / $b; // Division
  echo $a % $b; // Modulus
?>
```

## 7. Conditional Statements
Conditional statements like `if`, `else`, and `elseif` help execute code based on conditions.
```php
<?php
  $num = 10;
  if ($num > 0) {
    echo "Positive number";
  } elseif ($num < 0) {
    echo "Negative number";
  } else {
    echo "Zero";
  }
?>
```

## 8. Loops
Loops are used to execute a block of code multiple times.
```php
<?php
  // For loop
  for ($i = 0; $i < 5; $i++) {
    echo $i;
  }

  // While loop
  $x = 0;
  while ($x < 5) {
    echo $x;
    $x++;
  }

  // Do-While loop
  $y = 0;
  do {
    echo $y;
    $y++;
  } while ($y < 5);
?>
```

## 9. Arrays
Arrays store multiple values in a single variable.
```php
<?php
  $arr = ["Apple", "Banana", "Orange"];
  echo $arr[0]; // Apple

  // Associative array
  $ages = ["John" => 25, "Alice" => 22];
  echo $ages["John"]; // 25
?>
```

## 10. Functions
Functions allow code reuse by defining blocks of code that can be executed when needed.
```php
<?php
  function greet($name) {
    return "Hello, $name!";
  }
  echo greet("Uday");
?>
```

## 11. Superglobals
Superglobals are built-in variables available in all scopes.
```php
<?php
  echo $_SERVER['PHP_SELF'];
  echo $_GET['name'];
  echo $_POST['email'];
  echo $_SESSION['user'];
  echo $_COOKIE['username'];
?>
```

## 12. Form Handling
PHP handles form input using `$_POST` and `$_GET` methods.
```php
<form method="POST" action="">
  <input type="text" name="username">
  <input type="submit" value="Submit">
</form>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Hello, " . $_POST['username'];
  }
?>
```

## 13. Security Practices
To ensure secure PHP applications:
- **SQL Injection Protection**: Use `mysqli_real_escape_string()` or prepared statements.
- **Cross-Site Scripting (XSS) Prevention**: Use `htmlspecialchars()` to encode HTML entities.
- **Password Hashing**: Use `password_hash()` instead of storing plain text passwords.
- **User Input Validation**: Always sanitize and validate user inputs before processing.

## 14. Database Connection (MySQL)
PHP can connect to MySQL databases using `mysqli` or `PDO`.
```php
<?php
  $conn = new mysqli("localhost", "root", "", "test_db");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
?>
```

## 15. Object-Oriented Programming (OOP)
PHP supports OOP principles like classes, objects, and methods.
```php
<?php
  class Car {
    public $brand;
    function setBrand($brand) {
      $this->brand = $brand;
    }
    function getBrand() {
      return $this->brand;
    }
  }
  $myCar = new Car();
  $myCar->setBrand("Toyota");
  echo $myCar->getBrand();
?>
```

## 16. Error Handling
PHP provides `try-catch` blocks for handling exceptions.
```php
<?php
  try {
    throw new Exception("An error occurred");
  } catch (Exception $e) {
    echo "Error: " . $e->getMessage();
  }
?>
```

## 17. JSON Handling
PHP can encode and decode JSON data easily.
```php
<?php
  $arr = ["name" => "Uday", "age" => 22];
  $json = json_encode($arr);
  echo $json;
?>
```

## 18. Sending Emails
The `mail()` function is used to send emails in PHP.
```php
<?php
  mail("test@example.com", "Subject", "Message");
?>
```

## 19. API Requests (cURL)
cURL is used for making HTTP requests in PHP.
```php
<?php
  $ch = curl_init("https://api.example.com");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
  curl_close($ch);
  echo $response;
?>
```

This cheat sheet covers the most important aspects of PHP with proper code examples for reference.

