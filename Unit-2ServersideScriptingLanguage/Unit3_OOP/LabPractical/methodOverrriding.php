<?php
class ParentClass {
    function show() {
        echo "This is parent method<br>";
    }
}

class ChildClass extends ParentClass {
    function show() {
        echo "This is child method (Overridden)<br>";
    }
}

$obj = new ChildClass();
$obj->show();
?>
