<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quardatic Equation</title>
</head>
<body>


</body>
</html>
  <?php
    $a=(int) $_GET["a"];
     $b=(int)$_GET["b"];
      $c=(int)$_GET["c"];
       $d= $b** 2-4*$a *$c;
       if ($d >= 0){
        $x1 =(-$b + sqrt(num: $d)) /2*$a;
         $x1 =(-$b - sqrt(num: $d)) /2*$a;

              echo "The  rootes are ". $x1."". $x1. "";
       }else{
        echo " The rootes are imaginery";
       }
   
  
  
    ?>