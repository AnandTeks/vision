<?php
class DBConnection{

private $host = HOST;
private $dbname = DBNAME;
private $username = USERNAME;
private $password = PASSWORD;  

public $con = '';

function __construct(){

    $this->connect();   

}

function connect(){
    try{
        $this->con = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->username, $this->password);
        $this->con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        echo 'There was an error while trying to connect to the database';
        //file_put_contents('connection.errors.txt', $e->getMessage().PHP_EOL,FILE_APPEND);
    }
}   
}
?>