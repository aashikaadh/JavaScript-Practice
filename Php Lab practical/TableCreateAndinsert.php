<?php include "connection.php"?> 

<?php
// Check connection
if (!$conn) {
    die("Connection failed");
}

// Create table
$createTable = "CREATE TABLE student (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    age INT
)";

if (mysqli_query($conn, $createTable)) {
    echo "Table created successfully<br>";
} else {
    echo "Table already exists<br>";
}

// Insert data into table
$insertData = "INSERT INTO student (name, age)
               VALUES ('Aashika', 19)";

if (mysqli_query($conn, $insertData)) {
    echo "Record inserted successfully";
} else {
    echo "Data insertion failed";
}

mysqli_close($conn);
?>
