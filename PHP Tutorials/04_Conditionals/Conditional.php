<?php
// 1. if Statement
$age = 20;
if ($age >= 18) {
    echo "You are an adult.";
}

// 2. if-else Statement
$marks = 40;
if ($marks >= 50) {
    echo "You passed.";
} else {
    echo "You failed.";
}

// 3. if-elseif-else Statement
$score = 85;
if ($score >= 90) {
    echo "Grade: A";
} elseif ($score >= 75) {
    echo "Grade: B";
} elseif ($score >= 50) {
    echo "Grade: C";
} else {
    echo "Grade: F";
}

// 4. Ternary Operator
$age = 17;
$result = ($age >= 18) ? "Adult" : "Minor";
echo $result; // Output: Minor

// 5. Switch Case
$day = "Monday";
switch ($day) {
    case "Monday":
        echo "It's the start of the week.";
        break;
    case "Friday":
        echo "Weekend is near!";
        break;
    case "Sunday":
        echo "It's a holiday!";
        break;
    default:
        echo "It's a regular day.";
}

// 6. Null Coalescing Operator (??)
$username = $_GET['user'] ?? 'Guest';
echo $username; // If 'user' is not set, it prints "Guest"

// 7. Match Expression (PHP 8+)
$grade = "B";
$result = match ($grade) {
    "A" => "Excellent",
    "B" => "Good",
    "C" => "Average",
    "D" => "Below Average",
    default => "Fail",
};
echo $result; // Output: Good
?>
