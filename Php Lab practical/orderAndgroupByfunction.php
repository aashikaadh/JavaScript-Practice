<?php
include 'connection.php';

/* ---------- ORDER BY ---------- */
$orderSql = "SELECT empid, empname, empsalary 
             FROM employee 
             ORDER BY empsalary DESC"; // Highest salary first
$orderResult = $conn->query($orderSql);

/* ---------- GROUP BY ---------- */
$groupSql = "SELECT empname, COUNT(empid) AS total_employee, 
                    AVG(empsalary) AS avg_salary
             FROM employee
             GROUP BY empname";
$groupResult = $conn->query($groupSql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order By and Group By</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin-bottom: 30px;
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

<h3>Employee Records (ORDER BY Salary Descending)</h3>
<table>
    <tr>
        <th>EmpID</th>
        <th>Name</th>
        <th>Salary</th>
    </tr>

<?php
if ($orderResult->num_rows > 0) {
    while ($row = $orderResult->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['empid']."</td>";
        echo "<td>".$row['empname']."</td>";
        echo "<td>".$row['empsalary']."</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No Records Found</td></tr>";
}
?>
</table>

<h3>Name wise Employee Summary (GROUP BY Name)</h3>
<table>
    <tr>
        <th>EmpName</th>
        <th>Total Employees</th>
        <th>Average Salary</th>
    </tr>

<?php
if ($groupResult->num_rows > 0) {
    while ($row = $groupResult->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['empname']."</td>";
        echo "<td>".$row['total_employee']."</td>";
        echo "<td>".number_format($row['avg_salary'], 2)."</td>";
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
