<?php
include 'connection.php';

/* Subquery: Get employee(s) with highest salary */
$sql = "SELECT empid, empname, empsalary 
        FROM employee 
        WHERE empsalary = (SELECT MAX(empsalary) FROM employee)";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>MySQL Sub Query Example</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h3>Employee with Highest Salary (Using Subquery)</h3>

<table>
    <tr>
        <th>EmpID</th>
        <th>Name</th>
        <th>Salary</th>
    </tr>

<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['empid']."</td>";
        echo "<td>".$row['empname']."</td>";
        echo "<td>".$row['empsalary']."</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>No Records Found</td></tr>";
}
?>

</table>

</body>
</html>

<?php
$conn->close();
?>
