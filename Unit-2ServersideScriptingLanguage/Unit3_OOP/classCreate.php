<?php 
 class studet{
 	public $name;
 	public $address;
 	public $id;
 	function set_data($name, $address, $id)
 	{
 	$this->name=$name;
 	$this->address=$address;
 	$this->id=$id;

   }

 function getAddress(){
	return $this->address;
}
 function getName(){
return $this->name;
 }

 function getId(){
 	return $this->id;
 }
}
$s1=new studet();
$s1->set_data("Aashika", "maxapokhari", 101);
echo $s1-> getId(). ". My name is {$s1-> getName()} and i live in {$s1->getAddress()}";
// var_dump($s1->set_data);
 ?>