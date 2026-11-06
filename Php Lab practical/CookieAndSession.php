<?php
// Start session
session_start();

// Set a cookie (expires in 1 hour)
setcookie("username", "Aashika", time() + 3600, "/");

// Set a session variable
$_SESSION['user'] = "Aashika";

echo "<h2>Cookies and Sessions Handling</h2>";

// Display cookie
if(isset($_COOKIE['username'])){
    echo "Cookie Value: " . $_COOKIE['username'] . "<br>";
} else {
    echo "Cookie is not set.<br>";
}

// Display session
if(isset($_SESSION['user'])){
    echo "Session Value: " . $_SESSION['user'];
} else {
    echo "Session is not set.";
}
?>
