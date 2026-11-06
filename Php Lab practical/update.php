<?php
include 'connection.php';
$empid=1;
$empname="Aashika Adhikari";
$empsalary=80000;
$deptid=1;
$sql="UPDATE  employee SET empname='$empname', empsalary='$empsalary' WHERE empid=$empid";
if($conn->query($sql)==TRUE){
echo "<script>alert('Table updated sucessfully'); window.location='Retrive.php';</script>";
}else{
    echo "Error updating record:".$conn->error;

}
$conn->close();
?>
