<?php include "Database.php"?>
<?php
$sql="INSERT INTO register_tbl(sname,semail,spass)VALUES(?,?,?);";
$ps=$conn->prepare($sql);

$ps->bind_param("sss",$name,$email,$pass);
$name="ritu";
$email="ritu@gmail.com";
$pass="1234";
$ps->execute();
$name="Parkiti";
$email="parkiti@gmail.com";
$pass="4567";
$ps->execute();

?>
//$sql="UPDATE register_table SET sname=? WHERE sid=?";
$ps->bind_param("si",$name,$id);