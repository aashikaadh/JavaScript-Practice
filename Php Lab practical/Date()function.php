<?php
// Display current date and time in different formats

echo "<h2> Date Function Example</h2>";

// Current date in YYYY-MM-DD format
echo "Current Date: " . date("Y-m-d") . "<br>";

// Current time in HH:MM:SS format
echo "Current Time: " . date("H:i:s") . "<br>";

// Day, Month, Year format
echo "Today is: " . date("l, F j, Y") . "<br>";

// Full date and time
echo "Full Date & Time: " . date("l, F j, Y, h:i:s A") . "<br>";
?>
