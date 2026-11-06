<?php
$server="localhost";
$user="root";
$pass="";
$database="scripting_lab";//PDO,mysqli
$conn=mysqli_connect(hostname:$server,username:$user,password:$pass,database:$database);

if($conn->connect_error){
    die("Connection failed:" .$conn->connect_error);

    


}
echo"Connected successfully  <br>"; 
// $conn->close(); //connection to the database is broken
?>