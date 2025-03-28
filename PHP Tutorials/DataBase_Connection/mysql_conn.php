<?php
// 1. Database Connection
$servername = "localhost";  // Server name (usually localhost)
$username = "root";         // MySQL username
$password = "";             // MySQL password (leave empty for default)
$dbname = "test_db";        // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully\n";

// 2. Creating a Table
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table 'users' created successfully\n";
} else {
    echo "Error creating table: " . $conn->error;
}

// 3. Inserting Data
$sql = "INSERT INTO users (name, email) VALUES ('John Doe', 'john@example.com')";
if ($conn->query($sql) === TRUE) {
    echo "New record inserted successfully\n";
} else {
    echo "Error: " . $conn->error;
}

// 4. Fetching Data (SELECT)
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " | Name: " . $row["name"] . " | Email: " . $row["email"] . "\n";
    }
} else {
    echo "No records found\n";
}

// 5. Updating Data
$sql = "UPDATE users SET name='Jane Doe' WHERE id=1";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully\n";
} else {
    echo "Error updating record: " . $conn->error;
}

// 6. Deleting Data
$sql = "DELETE FROM users WHERE id=1";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully\n";
} else {
    echo "Error deleting record: " . $conn->error;
}

// 7. Closing the Connection
$conn->close();
?>
