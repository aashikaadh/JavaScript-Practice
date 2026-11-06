<?php
declare(strict_types=1); // data types is compulsory?>
<?php
$students = array("Ram","Shyam","Hari","Sita","Gita");
echo "<ol>";
foreach($students as $stud){
    echo "<li>" .$stud. "</li>";//display in web page

}
echo "</ol>";

function Addition( int $a, int $b) :int{
    return $a + $b;

}
echo "the summatation value=" .Addition(a: 5,b: 65);

function Division(int $a, int $b): float{
    return $a/$b;
}
echo "<br>The summation value=" .Division(a:5,b:2);
?>
