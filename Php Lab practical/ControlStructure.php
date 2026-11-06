<?php
// If-Else Example
$a = 10;
$b = 20;
if ($a > $b) {
    echo "A ($a) is greater than B ($b)<br>";
} else {
    echo "B ($b) is greater than A ($a)<br>";
}

// Switch Example
$day = 3;
switch ($day) {
    case 1:
        echo "Today is Sunday<br>";
        break;
    case 2:
        echo "Today is Monday<br>";
        break;
    case 3:
        echo "Today is Tuesday<br>";
        break;
    default:
        echo "Invalid day<br>";
}

// For Loop Example
echo "For Loop: ";
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
echo "<br>";

// While Loop Example
echo "While Loop: ";
$i = 1;
while ($i <= 3) {
    echo $i . " ";
    $i++;
}
echo "<br>";

// Do-While Loop Example
echo "Do-While Loop: ";
$i = 1;
do {
    echo $i . " ";
    $i++;
} while ($i <= 2);
echo "<br>";
?>
