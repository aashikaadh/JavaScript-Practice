<?php include "Database.php"?>
<?php
$id = $_GET['id'];
$sql="SELECT *FROM register_tbl WHERE sid=$id";
$result=$conn->query($sql);
$data = $result->fetch_assoc();
if (isset($_POST['update'])) {
    $name = $_POST['sname'];
    $email = $_POST['semail'];

$update="UPDATE register_tbl SET sname='$name', semail='$email' WHERE sid=$id";
$conn->query($update);
echo "<script>alert('Table updated sucessfully'); window.location='Retrive.php';</script>";
}
?>
<form method="post">
    Name: <input type="text" name="sname" value="<?php echo $data['sname']; ?>"><br><br>
    Email: <input type="email" name="semail" value="<?php echo $data['semail']; ?>"><br><br>
    <button type="submit" name="update">Update</button>
</form>