<?php
include 'connection.php';

$sql = "SELECT empid, empname, empsalary FROM employee";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Records</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
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

<h3>Employee Details</h3>

<table>
    <tr>
        <th>Employee ID</th>
        <th>Employee Name</th>
        <th>Employee Salary</th>
        <th>Actions</th>
    </tr>

<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        echo "<tr>";
        echo "<td>".$row['empid']."</td>";
        echo "<td>".$row['empname']."</td>";
        echo "<td>".$row['empsalary']."</td>";

        echo "<td>
                <a href='update.php?id=".$row['empid']."'>Update</a> | 
                <a href='delete.php?id=".$row['empid']."' 
                   onclick=\"return confirm('Delete this user?');\">Delete</a>
              </td>";

        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No Records Found</td></tr>";
}

$conn->close();
?>

</table>

</body>
</html>
