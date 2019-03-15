<?php


class WarlockClass extends CharacterClass
{
    static $className;
    static $instance;
    function __construct($spells = null)
    {
        parent::__construct($spells);
        self::$className = 'Warlock';
    }

    function getInstance()
    {
        if(self::$instance == null){
            self::$instance = new WarlockClass();
        }
        return self::$instance;
    }
}

