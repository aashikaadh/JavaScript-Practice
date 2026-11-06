<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Scripting_lab";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$queryIJ = "SELECT orders.Orderid, customers.Contactname, orders.Orderdate
FROM orders
INNER JOIN customers on orders.Customerid=customers.Customerid
";

if ($result = $conn->query($queryIJ)) {
if ($result->num_rows > 0) {

echo "<h2>Below table shows the inner-
join between orders and customers table</h2>";

echo "<table border=2>";
echo "<tr>";
echo "<th>OrderId</th>";
echo "<th>Customer Contact Name</th>";
echo "<th>Order Date</th>";
echo "</tr>";
while ($row = $result->fetch_assoc()) { //just like result.next()
echo "<tr>";
echo "<td>" . $row["Orderid"] . "</td>";
echo "<td>" . $row["Contactname"] . "</td>";
echo "<td>" . $row["Orderdate"] . "</td>";
echo "</tr>";
}
echo "</table>";
} else {
echo "0 results";
}
} else {
echo "ERROR: Could not able to execute $queryIJ. " . mysqli_error($conn);
}
$conn->close();
?>