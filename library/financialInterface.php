<?php
namespace library\Financial;

/*Create financial Interface*/
interface financialInterface{
	public function annualSalary($employee);
	public function hourlyWage($employee);
	public function yearsUntilRetirement($employee);
}