<?php
include 'connection.php';
$empid=9;
$sql="DELETE FROM employee WHERE empid=$empid";
if($conn->query($sql)==TRUE){
echo "<script>alert('Deleted Successfully'); window.location='Retrive.php';</script>";
}else{
    echo "Error deleting record:".$conn->error;

}
$conn->close();
?>