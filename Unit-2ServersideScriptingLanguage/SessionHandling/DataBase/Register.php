<?php
include("Database.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name  = $_POST["sname"];
    $email = $_POST["semail"];
    $pass  = $_POST["spass"];

    $sql = "INSERT INTO register_tbl(sname, semail, spass)
            VALUES('$name', '$email', '$pass')";

            

    $result = $conn->query($sql);

    if($result){
        echo "  <br>Data inserted successfully";
    } else {
        die("Error inserting data:");
    }

} else {
    die("Data not sent by POST method");
}

?>
//.=concadinate garxa multiple data insert garna milxa

