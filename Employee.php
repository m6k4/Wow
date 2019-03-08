<?php

class Employee extends User
{

    private static $extension; //lista ekstensji klasy
    private $salary; //atrybut prosty
    private $possition;
    private $date_of_employment; // atrybut złożony
    private static $employer; //atrybut klasowy


    function __construct($name, $email, $salary, $possition)
    {
        parent::__construct($name, $email);
        $this->salary = $salary;
        $this->possition = $possition;
        self::$employer = 'Bllizard';
        self::$extension[] = $this; //dodanie obiektu do ekstensji
    }

    function setRise($rise)
    {
       $this->salary += $rise;
    }

    //metoda klasowa
    static function changeSallary($rise)
    {
        foreach (self::$extension as $object){
            $object->setRise($rise);
        }
    }

    static function showExtension()
    {
        echo "Extension: \n";
        foreach(self::$extension as $object){
            echo $object;
        }
    }

    static function getExtension()
    {
        return self::$extension;
    }

    function __toString()
    {
        return "[name]: ". $this->name. "\n[email]: ". $this->email. "\n[salary]: ". $this->salary.
                "\n[possition]: ". $this->possition. "\n[employer]: ". self::$employer;
    }
}