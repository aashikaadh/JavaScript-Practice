<?php
// upload.php
if(isset($_POST['submit'])){
    move_uploaded_file($_FILES['file']['tmp_name'], "uploads/".$_FILES['file']['name']);
    echo "File uploaded successfully!";
}
?>
