<?php

abstract class User
{
    protected $name;
    protected $email;

    function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }



}