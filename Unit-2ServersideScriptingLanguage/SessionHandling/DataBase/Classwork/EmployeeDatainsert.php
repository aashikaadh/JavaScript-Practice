<?php include "Database.php"?>
<?php
$sql="INSERT INTO employee_tbl(Empname,Empaddress,EmpSalary)VALUES(?,?,?);";
$ps=$conn->prepare($sql);

$ps->bind_param("ssi",$Empname,$Empaddress,$EmpSalary);
$Empname="Aashika";
$Empaddress="Pyuthan";
$EmpSalary= 50000;
$ps->execute();
$Empname="Bijaya";
$Empaddress="ktm";
$EmpSalary= 40000;
$ps->execute();
$Empname="muskan";
$Empaddress="pokhara";
$EmpSalary= 30000;
$ps->execute();

echo "New records created successfully";
?>