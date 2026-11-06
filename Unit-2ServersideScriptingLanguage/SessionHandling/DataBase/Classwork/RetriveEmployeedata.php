<?php include "Database.php"?>
<?php
 foreach ($conn->query('SELECT SUM(EmpSalary) FROM employee_tbl') as $row) {
echo "<br>The sum is: " . $row['SUM(EmpSalary)'] . ".</br>";
}
foreach ($conn->query('SELECT COUNT(Empname) FROM employee_tbl') as $row) {
echo "The count is: " . $row['COUNT(Empname)'] . ".</br>";
}
foreach ($conn->query('SELECT AVG(EmpSalary) FROM employee_tbl') as $row) {
echo "The Average is: " . $row['AVG(EmpSalary)'] . ".</br>";
}
foreach ($conn->query('SELECT COUNT(Empid),Empname,Empaddress FROM employee_tbl GROUP BY Empaddress')as $row){
  echo "The count is: ". $row['COUNT(Empid)'] .".".$row['Empname'].".".$row['Empaddress'].".</br>";
}

?> 
<?php
$sql="SELECT  * FROM employee_tbl WHERE EmpSalary<(SELECT EmpSalary FROM employee_tbl WHERE Empid=1)";
$result=$conn->query($sql);
$count=0;
  ?>
    <!-- echo "Name is".$row["sname"]; 
    echo "Email is ".$row["semail"]; -->
    <table border="2px">
        <th>Sno.</th>
        <th>ID</th>
<th>Name</th>
<th>Address</th>
<th>Salary</th>
<th>Actions</th> 

<?php
while ($row= $result->fetch_assoc()){

  ?>
<tr>
  <td><?=++$count ?></td>
    <td><?=$row['Empid']?></td>
        <td><?=$row['Empname']?></td>
            <td><?=$row['Empaddress']?></td>
               <td><?=$row['EmpSalary']?></td>
           

                <td> <a href="Update.php?id=<?php echo $row['Empid']; ?>">Update</a>|  
             <a href="Delete.php?id=<?php echo $row['Empid']; ?>" onclick="return confirm('Delete this user?');">Delete</a>
             </td> 
             
    
</tr>

<?php
}
?>
</table>