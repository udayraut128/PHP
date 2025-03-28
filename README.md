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

