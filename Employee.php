<?php

class Employee extends User
{
    private $salary;
    private $possition;

    function __construct($name, $email, $salary, $possition)
    {
        parent::__construct($name, $email);
        $this->salary = $salary;
        $this->possition = $possition;
    }

    function __toString()
    {
        return "[name]: ". $this->name. "\n[email]: ". $this->email. "\n[salary]: ". $this->salary.
                "\n[possition]: ". $this->possition;
    }
}