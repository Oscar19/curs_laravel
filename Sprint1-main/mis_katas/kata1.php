<?php
    class Employee

    {
    
        public $name;
    
        public $employee;
    
        public function __construct($name, $employee)
    
        {
    
            $this->name = $name;
    
            $this->employee = $employee;
    
        }
    
    }
    
    function createEmployeeObject($name, $email)
    
    {
    
        return new Employee($name, $email);
    
    }
    
    $employeeNames = ['john', 'mark', 'lisa'];
    
    $employeeEmails = ['john@example.com', 'mark@example.com', 'lisa@example.com'];
    
    $results = array_map('createEmployeeObject', $employeeNames, $employeeEmails);
    
    print_r($results);
    
?>