<?php 
require 'vendor/autoload.php';
include_once 'library/employeeFactory.php';
require	'library\financial.php';

/*Define Employees*/
$employee = new employeeFactory();
$programmer = $employee::create(
				'Mary',
				30, //Age
				'programmer', //Position
				rand(70,100), //Salary
				'Romania' //Address
			);
$bankOfficer = $employee::create(
				'Iry',
				40, //Age
				'bank officer', //Position
				rand(70,100), //Salary
				'Romania' //Address
			);
			
/*Get financial aspect of employee*/
$financial = new library\Financial\financial();

// calculate annualSalary
$completeSalaryProgrammer = $financial->annualSalary($programmer);
$completeSalaryBankOfficer = $financial->annualSalary($bankOfficer);

print_r('<p class="progr">Programmer Annual Salary: '. $completeSalaryProgrammer['salary_annual'] . '</p><br/>' . '<p class="bank"> BankOfficer Annual Salary: ' . $completeSalaryBankOfficer['salary_annual']. '</p><br/>'. '<br/>');

// calculate hourlyWage
$hourlyWageProgrammer = $financial->hourlyWage($programmer);
$hourlyWageBankOfficer = $financial->hourlyWage($bankOfficer);

print_r('<p class="progr">Programmer Hourly Salary: '. $hourlyWageProgrammer . '</p><br/>' . '<p class="bank"> BankOfficer Hourly Salary: ' . $hourlyWageBankOfficer. '</p><br/>'. '<br/>');

//calculate years until retirement
$retirementProgrammer = $financial->yearsUntilRetirement($programmer);
$retirementBankOfficer = $financial->yearsUntilRetirement($bankOfficer);

print_r('Programmer years until retirement: '. $retirementProgrammer . '<br/>' . ' BankOfficer years until retirement: ' . $retirementBankOfficer. '<br/>');

?>

<script type="text/javascript" src="assets/scripts.js"></script>
<link rel="stylesheet" href="assets/style.css" type="text/css">