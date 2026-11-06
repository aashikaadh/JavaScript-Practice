<?php
include 'connection.php';

/* Aggregate Functions */
$sql = "SELECT 
            SUM(empsalary) AS total_salary,
            AVG(empsalary) AS average_salary,
            COUNT(empid) AS total_employee
        FROM employee";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Aggregate Functions</title>
</head>
<body>

<h3>Employee Salary</h3>

<table border="1" cellpadding="8">
    <tr>
        <th>Total Salary</th>
        <th>Average Salary</th>
        <th>Total Employees</th>
    </tr>
    <tr>
        <td><?php echo $row['total_salary']; ?></td>
        <td><?php echo number_format($row['average_salary'], 2); ?></td>
        <td><?php echo $row['total_employee']; ?></td>
    </tr>
</table>

</body>
</html>

<?php
$conn->close();
?>
