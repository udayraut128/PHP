<?php
// 1. Writing to a File
$file = fopen("example.txt", "w"); // Open file for writing
fwrite($file, "Hello, this is a test file.\n");
fwrite($file, "File handling in PHP is easy!\n");
fclose($file);

// 2. Reading from a File
$file = fopen("example.txt", "r"); // Open file for reading
while (!feof($file)) { // Read until end of file
    echo fgets($file); // Output each line
}
fclose($file);

// 3. Appending to a File
$file = fopen("example.txt", "a"); // Open file for appending
fwrite($file, "Appending new content.\n");
fclose($file);

// 4. Reading Entire File at Once
$content = file_get_contents("example.txt");
echo $content; // Output file content

// 5. Writing Entire Content at Once
file_put_contents("example.txt", "Overwriting the file content!\n");

// 6. Checking if File Exists
if (file_exists("example.txt")) {
    echo "File exists!\n";
} else {
    echo "File does not exist.\n";
}

// 7. Getting File Size
echo "File size: " . filesize("example.txt") . " bytes\n";

// 8. Renaming a File
rename("example.txt", "new_example.txt");

// 9. Deleting a File
unlink("new_example.txt");

// 10. Creating and Removing a Directory
mkdir("test_directory"); // Create directory
rmdir("test_directory"); // Remove directory

// 11. Listing Files in a Directory
$files = scandir(".");
print_r($files); // Output list of files

// 12. Checking if Path is a File or Directory
$path = "example.txt";
if (is_file($path)) {
    echo "$path is a file\n";
} elseif (is_dir($path)) {
    echo "$path is a directory\n";
}

// 13. Getting File Information
$fileInfo = pathinfo("example.txt");
print_r($fileInfo); // Output file details

// 14. Opening File in Different Modes
$fileModes = ["r", "w", "a", "r+", "w+", "a+"];

foreach ($fileModes as $mode) {
    $file = fopen("example.txt", $mode);
    fclose($file);
}

// 15. Locking a File (Avoid Simultaneous Access Issues)
$file = fopen("example.txt", "r+");
if (flock($file, LOCK_EX)) { // Exclusive lock
    fwrite($file, "Writing with file lock.\n");
    flock($file, LOCK_UN); // Release lock
}
fclose($file);
?>
