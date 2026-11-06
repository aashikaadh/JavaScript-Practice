<?php include "Database.php"?> 
<?php $sql="SELECT *FROM register_tbl ORDER BY sname"; 
$result=$conn->query($sql); $count=0; ?> 
<!-- echo "Name is".$row["sname"]; echo "Email is ".$row["semail"]; --> 
 <table border="2px"> 
    <th>Sno.</th>
     <th>ID</th> 
     <th>Name</th> 
     <th>Email</th> 
     <th>Actions</th> 
     <?php 
     while ($row= $result->fetch_assoc()){ 
        ?> 
        
        <tr> 
            <td><?=++$count ?></td> 
            <td><?=$row['sid']?></td> 
            <td><?=$row['sname']?></td> 
            <td><?=$row['semail']?></td> 
            
            <td> <a href="Update.php?id=<?php echo $row['sid']; ?>">Update</a>| 
            <a href="Details.php?id=<?php echo $row['sid']; ?>">Details</a> | 
             <a href="Delete.php?id=<?php echo $row['sid']; ?>" onclick="return confirm('Delete this user?');">Delete</a>
             </td> 
            </tr>
             <?php
             }
              ?> 
              </table>