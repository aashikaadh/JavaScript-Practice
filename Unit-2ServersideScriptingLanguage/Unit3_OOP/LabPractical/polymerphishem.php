<?php
class Shape {
    function area() {
        echo "Area method<br>";
    }
}

class Rectangle extends Shape {
    function area() {
        echo "Area of Rectangle<br>";
    }
}

class Circle extends Shape {
    function area() {
        echo "Area of Circle<br>";
    }
}

$shapes = array(new Rectangle(), new Circle());

foreach ($shapes as $shape) {
    $shape->area();
}
?>
