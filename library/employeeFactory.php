<?php 
include_once('employee.php');

// employeeFactory class
class employeeFactory {
	
	/*create static method -directly call
	*return employee obj
	*/
	public static function create($name, $age, $position, $salary, $address)
    {
        return new Employee($name, $age, $position, $salary, $address);
    }
}
