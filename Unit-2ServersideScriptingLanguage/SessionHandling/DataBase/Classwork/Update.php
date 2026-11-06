<?php include "Database.php"?>
<?php
$id = $_GET['id'];
$sql="SELECT *FROM employee_tbl WHERE Empid=$id";
$result=$conn->query($sql);
$data = $result->fetch_assoc();
if (isset($_POST['update'])) {
    $Empname = $_POST['Empname'];
    $Empaddress = $_POST['Empaddress'];
    $EmpSalary = $_POST['EmpSalary'];

$update="UPDATE employee_tbl SET Empname='$Empname', Empaddress='$Empaddress', EmpSalary='$EmpSalary' WHERE Empid=$id";
$conn->query($update);
echo "<script>alert('Table updated sucessfully'); window.location='RetriveEmployeedata.php';</script>";
}
?>
<form method="post">
    EmpName: <input type="text" name="Empname" value="<?php echo $data['Empname']; ?>"><br><br>
    EmpAddress: <input type="text" name="Empaddress" value="<?php echo $data['Empaddress']; ?>"><br><br>
     EmpSalary: <input type="number" name="EmpSalary" value="<?php echo $data['EmpSalary']; ?>"><br><br>
    <button type="submit" name="update">Update</button>
</form>