<?php
$file=fopen(filename:"Aashika.txt", mode: "r") or die ("File not exit");
// echo readfile( filename:"Aashika.txt");
echo readfile( filename:$file,filesize($file));
?>
