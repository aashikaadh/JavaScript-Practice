<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <table>
        <tr>
            <td>Username:</td>
            <td><input type="text" name="uname"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="pass"></td>
        </tr>
<tr>
            <td></td>
            <td><input type="submit" value="login"></td>
        </tr>
        </table>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"]== "POST"){
$user=$_POST['uname'];
$pass=$_POST['pass'];

?>
    <table>
        <th>Username</th>
        <th>Password</th>
        <tr>
            <td><?=$user ?></td>
            <td><?=$pass ?></td>
</tr>
</table>
<?php } ?>
</body>
</html>