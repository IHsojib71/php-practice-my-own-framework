<?php 

class Database{
    public $pdo;

    public function __construct($config, $username = 'root', $password=''){

        
        //mysql:host=localhost;port=3306;dbname=phpapp;charset=phpapp
        $dsn = "mysql:" . http_build_query($config, "", ";");

        $this->pdo = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_ASSOC
        ]);
    }

    public function query($query){
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        return $statement;
    }
}