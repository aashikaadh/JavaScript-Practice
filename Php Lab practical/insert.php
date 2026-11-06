<?php
include 'connection.php';
$empname="Aashika Adhikari";
 $empsalary=45000;
  $empname="shristi";
 $empsalary=35000;
   $empname="Muskan";
 $empsalary=20000;
  $empname="bijaya raut";
 $empsalary=30000;
$sql="INSERT INTO employee(empname,empsalary)VALUES('$empname','$empsalary')";
if($conn->query($sql)==TRUE){
    echo "New Record created successfully";
}else{
    echo "Error:".$sql."<br>".$conn->error;

}
$conn->close();
?>