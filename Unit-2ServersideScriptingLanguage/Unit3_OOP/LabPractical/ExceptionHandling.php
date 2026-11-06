<?php

function ValidAge($age)
{
    if($age<0)
         throw new Exception(" Invalid Age Exception");
    else
         echo "Valid age";
}
try{
ValidAge(-2);
}catch(Exception $ex){
    echo "The exception is{$ex->getMessage()}";
}
echo "<br>Exception is properly handled";
//more improtant statement will be execute after execution is handled
?>