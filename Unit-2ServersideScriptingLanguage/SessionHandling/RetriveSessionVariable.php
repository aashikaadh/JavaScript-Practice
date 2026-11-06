<?php
session_start();

?>
<?php
  $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];
     echo "Session variable are set.";
echo "Welcome user:".$_SESSION["username"]. " .";
?>