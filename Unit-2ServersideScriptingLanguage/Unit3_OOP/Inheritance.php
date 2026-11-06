<?php
class  Employee{
	public $empid;
	public $empname;
	public $empaddress;
	protected $basesalary=30000;

}
class Developer extends Employee{
	public $bonus=10000;
	function getSalary(){
		return ($this->basesalary+ $this->bonus);
	}
}
// $emp=new Employee();
// echo "My salary as an Employee is {$emp->getSalary()}";
$dev=new Developer();
echo "My salary as Developer is {$dev->getSalary()}";
?>