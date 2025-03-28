<?php
// 1. While Loop
$i = 1;
while ($i <= 5) {
    echo $i . " ";
    $i++;
}
// Output: 1 2 3 4 5

echo "\n";

// 2. Do-While Loop
$j = 1;
do {
    echo $j . " ";
    $j++;
} while ($j <= 5);
// Output: 1 2 3 4 5

echo "\n";

// 3. For Loop
for ($k = 1; $k <= 5; $k++) {
    echo $k . " ";
}
// Output: 1 2 3 4 5

echo "\n";

// 4. Foreach Loop (for arrays)
$colors = ["Red", "Green", "Blue"];
foreach ($colors as $color) {
    echo $color . " ";
}
// Output: Red Green Blue

echo "\n";

// 5. Break Statement
for ($x = 1; $x <= 5; $x++) {
    if ($x == 3) {
        break;
    }
    echo $x . " ";
}
// Output: 1 2

echo "\n";

// 6. Continue Statement
for ($y = 1; $y <= 5; $y++) {
    if ($y == 3) {
        continue;
    }
    echo $y . " ";
}
// Output: 1 2 4 5

?>
