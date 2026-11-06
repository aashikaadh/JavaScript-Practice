<?php include "Database.php"; ?>

<?php
$id = $_GET['id'];

$conn->query("DELETE FROM employee_tbl WHERE Empid = $id");

echo "<script>alert('Deleted Successfully'); window.location='RetriveEmployeedata.php';</script>";
?>
