<?php include "Database.php"; ?>

<?php
$id = $_GET['id'];

$result = $conn->query("SELECT * FROM register_tbl WHERE sid = $id");
$data = $result->fetch_assoc();
?>

<h2>User Details</h2>

<p><b>Name:</b> <?= $data['sname'] ?></p>
<p><b>Email:</b> <?= $data['semail'] ?></p>

<a href="Retrive.php">Back</a>
