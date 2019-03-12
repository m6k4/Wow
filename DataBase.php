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

    public function getInstance() // Singleton
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
                avatarImg VARCHAR(30)NOT NULL,
                capitalCity VARCHAR(30)NOT NULL
                )";
        $this->isQueryExecute($sql);

        $sql = "CREATE TABLE Class(
                class VARCHAR(30) NOT NULL PRIMARY KEY
                )";
        $this->isQueryExecute($sql);

        $sql = "CREATE TABLE UserType(
                UserType VARCHAR(30) NOT NULL PRIMARY KEY
                )";
        $this->isQueryExecute($sql);

        $sql = "CREATE TABLE User(
                email VARCHAR(30) NOT NULL PRIMARY KEY,
                password VARCHAR (30) NOT NULL,
                name VARCHAR(30) NOT NULL,
                userType_FK VARCHAR(30),
                salary INT,
                position VARCHAR(30),
                employer VARCHAR(30),
                playerNumber INT,
                FOREIGN KEY (UserType_FK) REFERENCES UserType(UserType)
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

    public function fillDataBase()
    {
        $sql = "INSERT INTO
        Class(class) VALUES
               ('Priest'),
               ('Rogue'),
               ('Mage')
               ";
        $this->isQueryExecute( $sql);

        $sql = "INSERT INTO
        Race(race, fraction, avatarImg, capitalCity) VALUES
               ('Human', 'Alliance', 'human.img', 'Stormwind'),
               ('Orc', 'Horde', 'orc.img', 'Blackrock Spire')
               ";
        $this->isQueryExecute( $sql);

        $sql = "INSERT INTO
        UserType(userType) VALUES
               ('Player'),
               ('Employee')
               ";
        $this->isQueryExecute( $sql);

        $sql = "INSERT INTO
        User(email, password, name, userType_FK, salary, position, employer) VALUES
               ('ania@op.pl', 'qwerty123', 'ania', 'Employee',  300, 'tester', 'Blizzard')
               ";
        $this->isQueryExecute( $sql);

        $sql = "INSERT INTO
        User(email, password, name, userType_FK, playerNumber) VALUES
               ('kasia@op.pl', 'a1b2c3', 'kasia', 'Player', 151848 )
               ";
        $this->isQueryExecute( $sql);

    }

    public function createCharacterClass($class)
    {
        $sql = "INSERT INTO
                Class(class) VALUES
                ('$class')";

        return $this->isQueryExecute($sql);
    }

    public function createCharacterRace($race, $fraction, $avatarImg, $capitalCity)
    {
        $sql = "INSERT INTO
                Race(race, fraction, avatarImg, capitalCity) VALUES
                ('$race', '$fraction', '$avatarImg', '$capitalCity')";

        return $this->isQueryExecute($sql);
    }

    public function getAllCharacterRaces()
    {
        $sql = "SELECT *
                FROM Race
                ";
        $result = $this->isQueryExecute($sql);
        while($row=mysqli_fetch_assoc($result)){
            $table[] = $row;
        }
        return $table;
    }

    public function getAllCharacterClasses()
    {
        $sql = "SELECT *
                FROM Class
                ";
        $result = $this->isQueryExecute($sql);
        while($row=mysqli_fetch_assoc($result)){
            $table[] = $row;
        }
        return $table;

    }

    public function getAllGameCharacters()
    {
        $sql = "SELECT *
                FROM GameCharacter
                ";
        $result = $this->isQueryExecute($sql);
        while($row=mysqli_fetch_assoc($result)){
            $table[] = $row;
        }
        return $table;

    }

    public function getAllUsers()
    {
        $sql = "SELECT *
                FROM User
                ";
        $result = $this->isQueryExecute($sql);
        while($row=mysqli_fetch_assoc($result)){
            $table[] = $row;
        }
        return $table;

    }

    public function getUser($email, $password)
    {
        $sql = "SELECT *
                FROM User
                WHERE email = '$email' AND password = '$password'
                ";
        $result = $this->isQueryExecute($sql);
        $row=mysqli_fetch_assoc($result);

        return $row;

    }

    public function createNewCharacter(CharacterRace $race, CharacterClass $class, User $user, $nick)
    {
        $raceName = $race->getRaceName();
        $className = $class->getClassName();
        $user = $user->getEmail();
        $sql = "INSERT INTO
                GameCharacter(Race_FK, Class_FK, User_FK, nick) VALUES
                ('$raceName', '$className', '$user', '$nick')";
        return $this->isQueryExecute($sql);
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