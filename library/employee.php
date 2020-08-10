<?php
/**
Employee class
*/

class Employee{
		
	/*Private and public attribute for employee*/
	public  $name; 
	private $age;
	private $position;
	private $salary;
	private $address;
	
	/*Constructor employee */
	public function __construct($name, $age, $position, $salary, $address) {
		$this->name = $name;
		$this->age = $age;
		$this->position = $position;
		$this->salary = $salary;
		$this->address = $address;
	}
	
	/*Verify properties
	*@param attribute
	*@param value
	*return mixed
	*/
	public function verifyAttribute($value){
		return preg_replace( '/[^a-zA-Z0-9.,]/', '', $value );
	}
	
	/*Return properties
	*@param attribute
	*return mixed
	*/
	public function getAttribute($attribute){
		if (property_exists($this, $attribute)){
		  return $this->$attribute;
		}
	}
	
	/*Set properties
	*@param attribute
	*@param value
	*/
	public function setAttribute($attribute, $value){
		if (property_exists($this, $attribute)){
			if($this->verifyAttribute($value)){
				$this->$attribute = $value;
			}
		}
	}
	
} //end `Employee` class