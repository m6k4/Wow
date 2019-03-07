<?php

class DataBase
{
    public $connection;

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
                class VARCHAR(30) NOT NULL PRIMARY KEY,
                )";
        $this->isQueryExecute($sql);

        $sql = "CREATE TABLE Player(
                email VARCHAR(30) NOT NULL PRIMARY KEY,
                name VARCHAR(30) NOT NULL,
                player_number VARCHAR(30) NOT NULL UNIQUE
                )";
        $this->isQueryExecute($sql);

        $sql = "CREATE TABLE Character(
                Class_FK VARCHAR(30),
                Race_FK VARCHAR(30),
                Player_FK VARCHAR(30),
                character_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                nick VARCHAR(30) NOT NULL PRIMARY KEY,
                FOREIGN KEY (Class_FK) REFERENCES Class(class),
                FOREIGN KEY (Race_FK) REFERENCES Race(race),
                FOREIGN KEY (Player_FK) REFERENCES Player(email)
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