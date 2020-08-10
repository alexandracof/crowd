<?php
namespace library\Financial;
include('financialInterface.php');

class financial implements financialInterface {
	
	/*
	*Get salary, return complete salary
	*@param $employee
	*return array
	*/
	public function annualSalary($employee){
		$salaryMonthly = $employee->getAttribute('salary');
		$salaryComplete = array();
		
		if(isset($salaryMonthly)) {
			$salaryComplete['salary_monthly'] = $salaryMonthly;
			$salaryComplete['salary_annual'] = $salaryMonthly*12;
			return $salaryComplete;
		}else {
			return false;
		}
	}
	
	/*
	* Calculate hourlyWage
	*/
	public function hourlyWage($employee){
		$salaryMonthly = $employee->getAttribute('salary');
		
		if(isset($salaryMonthly)){
			return $salaryMonthly/160;
		} else {
			return false;
		}
	}
	
	public function yearsUntilRetirement($employee){
		$currentAge = $employee->getAttribute('age');
		
		if(isset($currentAge)){
			return 60 - $currentAge; // consider retirement at age 60
		} else {
			return false;
		}
	}
}