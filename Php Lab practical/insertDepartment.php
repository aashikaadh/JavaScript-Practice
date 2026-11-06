<?php
include 'connection.php';

/* Insert data into department table */
$sql = "INSERT INTO department (deptid, deptname) VALUES 
        (1,'IT'),
        (3,'HR'),
        (5,'IT'),
        (6,'HR'),
        (7,'Finance')";

if ($conn->query($sql) === TRUE) {
    echo "Departments inserted successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
