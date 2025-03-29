<?php
$servername = "localhost";  // Change if needed
$username = "root";         // Change if needed
$password = "";             // Change if needed
$dbname = "mydb";  // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!-- insert data into database -->
<?php
require 'index.php'; // Ensures the database connection is included

$sql = "INSERT INTO user(name, email) VALUES('uday', 'rautuday75@gmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record added successfully";
} else {
    echo "Error: " . $sql . "<br>" ;
}

$conn->close();
?>