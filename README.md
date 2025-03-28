# Table of Contents
- [MySQL Connection in PHP using XAMPP](#PHP-&-MySQL-Connection-with-XAMPP-(Windows))
- [MongoDB Connection in PHP](#Connecting-MongoDB-with-PHP-using-XAMPP-on-Windows)

---

# **PHP & MySQL Connection with XAMPP (Windows)**

## **🔹 Step 1: Install XAMPP**
1. **Download & Install XAMPP**  
   👉 [Download XAMPP](https://www.apachefriends.org/download.html)  
2. **Run XAMPP Control Panel** and **Start**:
   - `Apache` (for PHP)
   - `MySQL` (for the database)

---

## **🔹 Step 2: Create a MySQL Database**
1. Open **XAMPP Control Panel** and click **Admin** next to MySQL.
2. It opens **phpMyAdmin** in your browser.
3. Click on **Databases** → Enter database name **"mydb"** → Click **Create**.
4. Click on **SQL** and run:
   ```sql
   CREATE TABLE users (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(50),
       email VARCHAR(100)
   );
   ```

---

## **🔹 Step 3: Create a PHP Connection File**
Create a file **config.php** inside `C:\xampp\htdocs\php-mysql`:

```php
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";  // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}
echo "✅ Connected to MySQL successfully!";
?>
```

---

## **🔹 Step 4: Insert Data into MySQL**
Create a file **insert.php** inside `C:\xampp\htdocs\php-mysql`:

```php
<?php
require 'config.php';

$sql = "INSERT INTO users (name, email) VALUES ('John Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "✅ New record created successfully";
} else {
    echo "❌ Error: " . $conn->error;
}

$conn->close();
?>
```

---

## **🔹 Step 5: Fetch Data from MySQL**
Create **fetch.php**:

```php
<?php
require 'config.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " | Name: " . $row["name"] . " | Email: " . $row["email"] . "<br>";
    }
} else {
    echo "No records found!";
}

$conn->close();
?>
```

---

## **🔹 Step 6: Run & Test PHP Files**
1. Open **XAMPP Control Panel** → Start **Apache & MySQL**.
2. Open your browser and go to:
   - `http://localhost/php-mysql/config.php` → To test the connection  
   - `http://localhost/php-mysql/insert.php` → To insert data  
   - `http://localhost/php-mysql/fetch.php` → To fetch data  

---

## **💡 Troubleshooting**
### **1. MySQL Not Running?**
- Open XAMPP and **start** MySQL.
- Check `C:\xampp\mysql\data\` for corruption.

### **2. Can't Connect to MySQL?**
- Make sure MySQL is running in XAMPP.
- Check if the `dbname`, `username`, and `password` are correct.

### **3. Database Not Found?**
- Verify that `mydb` exists in **phpMyAdmin**.

---

## **🎯 Summary**
✔️ Install **XAMPP** and Start **Apache & MySQL**  
✔️ Create a **MySQL Database** using **phpMyAdmin**  
✔️ Write PHP Code to **Connect**, **Insert**, & **Fetch Data**  
✔️ Run **PHP Files** via **http://localhost/**  

Now your **PHP & MySQL** setup with XAMPP is complete! 🚀





# Connecting MongoDB with PHP using XAMPP on Windows

## Prerequisites
- Install **XAMPP** (Apache + PHP + MySQL) from [Apache Friends](https://www.apachefriends.org/)
- Install **MongoDB Community Edition** from [MongoDB Download Center](https://www.mongodb.com/try/download/community)
- Install **MongoDB Compass** (optional, for GUI management)
- Install **Composer** from [getcomposer.org](https://getcomposer.org/)

## Step 1: Start MongoDB Server
1. Open Command Prompt and navigate to MongoDB's installation directory:
   ```sh
   cd C:\Program Files\MongoDB\Server\6.0\bin
   ```
2. Start the MongoDB service:
   ```sh
   mongod
   ```

## Step 2: Install MongoDB PHP Driver
1. Open Command Prompt and navigate to your PHP project directory:
   ```sh
   cd C:\xampp\htdocs\your_project
   ```
2. Run the following command to install the MongoDB PHP driver using Composer:
   ```sh
   composer require mongodb/mongodb
   ```

## Step 3: Configure PHP for MongoDB
1. Open **php.ini** file (located at `C:\xampp\php\php.ini`).
2. Find and enable the MongoDB extension by adding the following line:
   ```ini
   extension=mongodb
   ```
3. Restart Apache from the XAMPP Control Panel.

## Step 4: Create a PHP Script to Connect to MongoDB
Create a file named `index.php` in your project directory (`C:\xampp\htdocs\your_project`):

```php
<?php
require 'vendor/autoload.php';
use MongoDB\Client;

// Create MongoDB connection
$client = new Client("mongodb://localhost:27017");

// Select database and collection
$db = $client->user;
$collection = $db->users;

// Insert data
$collection->insertOne(["name" => "John Doe", "age" => 25, "email" => "john@example.com"]);

echo "User added successfully!";
?>
```

## Step 5: Run the PHP Script
1. Start Apache from the **XAMPP Control Panel**.
2. Open a web browser and go to:
   ```
   http://localhost/your_project/index.php
   ```
3. You should see `User added successfully!`

## Troubleshooting
- If you get an error **Class 'MongoDB\Client' not found**, ensure that:
  - `composer require mongodb/mongodb` was executed in the correct directory.
  - The `vendor` folder exists in your project.
  - The `php.ini` file has `extension=mongodb` enabled.
  - Apache has been restarted after making changes.

## Conclusion
You have successfully connected MongoDB with PHP using XAMPP on Windows! 🚀


