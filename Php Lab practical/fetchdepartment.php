<?php
include 'connection.php';

$sql = "SELECT deptid, deptname FROM department";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Department Records</title>
    <style>
        table {
            border-collapse: collapse;
            width: 40%;
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

<h3>Department Details</h3>

<table>
    <tr>
        <th>DeptID</th>
        <th>DeptName</th>
    </tr>

<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['deptid']."</td>";
        echo "<td>".$row['deptname']."</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='2'>No Records Found</td></tr>";
}

$conn->close();
?>

</table>

</body>
</html>
