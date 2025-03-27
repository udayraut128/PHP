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

  // Do-Whi
