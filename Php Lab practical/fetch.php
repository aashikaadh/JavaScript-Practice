<?php include "connection.php"?>
<?php
// Check connection
if (!$conn) {
    die("Connection failed");
}

// Select data from table
$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);

// Check if records exist
if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Name: " . $row['name'] . "<br>";
        echo "Age: " . $row['age'] . "<br><br>";
    }

} else {
    echo "No records found";
}

mysqli_close($conn);
?>
