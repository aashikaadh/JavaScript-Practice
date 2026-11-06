<?php include "Database.php"; ?>

<?php
$id = $_GET['id'];

$conn->query("DELETE FROM register_tbl WHERE sid = $id");

echo "<script>alert('Deleted Successfully'); window.location='Retrive.php';</script>";
?>
