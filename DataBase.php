<?php

class DataBase
{
    public $connection;
    private static $instance;
    public function __construct($host="localhost", $user="root", $password ="")
    {
        //nawiązanie połączenia
        $this->connection = mysqli_connect($host, $user, $password);
        //stworzenie bazy Wow
        $sql = "CREATE DATABASE Wow";
        $this->isQueryExecute($sql);
        //nawiązanie połączenia z bazą Wow
        $this->connection = mysqli_connect($host, $user, $password, "Wow");

    }

    public function getInstance() //Wzorzec Singleton
    {
        if(self::$instance == null){
            self::$instance = new DataBase();
        }else{
            return self::$instance;
        }
    }

    public function createDataBase()
    {
        $sql = "CREATE TABLE Race(
                race VARCHAR(30) NOT NULL PRIMARY KEY,
                fraction VARCHAR(30) NOT NULL,
                avatar_img VARCHAR(30)NOT NULL,
                capital_city VARCHAR(30)NOT NULL
                )";
        $this->isQueryExecute($sql);

        $sql = "CREATE TABLE Class(
                class VARCHAR(30) NOT NULL PRIMARY KEY
                )";
        $this->isQueryExecute($sql);

        $sql = "CREATE TABLE UserType(
                Type VARCHAR(30) NOT NULL PRIMARY KEY
                )";
        $this->isQueryExecute($sql);

        $sql = "CREATE TABLE User(
                email VARCHAR(30) NOT NULL PRIMARY KEY,
                name VARCHAR(30) NOT NULL,
                userType_FK VARCHAR(30),
                salary VARCHAR(30),
                position VARCHAR(30),
                employer VARCHAR(30),
                playerNumber VARCHAR(30),
                FOREIGN KEY (UserType_FK) REFERENCES UserType(type)
                )";
        $this->isQueryExecute($sql);

        $sql = "CREATE TABLE GameCharacter(
                Class_FK VARCHAR(30),
                Race_FK VARCHAR(30),
                User_FK VARCHAR(30),
                character_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                nick VARCHAR(30) NOT NULL,
                FOREIGN KEY (Class_FK) REFERENCES Class(class),
                FOREIGN KEY (Race_FK) REFERENCES Race(race),
                FOREIGN KEY (User_FK) REFERENCES User(email)
                )";
        $this->isQueryExecute($sql);

    }






    private function isQueryExecute($sql)
    {
        if ($result = mysqli_query($this->connection, $sql)) {
            echo "Query execute succesfull " . "\n";
            return $result;
        } else {
            echo "Query not execute " . mysqli_error($this->connection). "\n";
            return false;
        }
    }


}