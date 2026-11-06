<?php
class Book {
    function __construct() {
        echo "Constructor called<br>";
    }

    function __destruct() {
        echo "Destructor called";
    }
}

$obj = new Book();
?>
