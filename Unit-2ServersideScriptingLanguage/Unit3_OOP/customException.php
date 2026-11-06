<?php

class CustomException extends Exception{
public function __construct(string $message="")
{
    return parent::__construct($message);
}
}
    function ValidAge($age)
{
    if($age<0) throw new CustomException("Invalid Age Exception");
    else echo "Valid age";
}
try{
ValidAge(-2);
}catch(Exception $ex){
    echo "The exception is {$ex} and {$ex->getMessage()}<br>";
}
echo "Exception is properly handled";
//more improtant statement will be execute after execution is handled
?>