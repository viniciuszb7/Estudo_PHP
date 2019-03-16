<?php

class Sql extends PDO{
    private $conn;

    public function __construct(){

        $this->conn= new PDO("mysql:host=localhost;dbname=estphp7", "root", "123gorilao");
    }


    private function setParams ($statement , $parameters = array()){
        foreach ($parameters as $key => $value){
            $this->setParam($statement, $key, $value);
        }
    }

    public function setparam ($statement, $key, $value){
        $statement->bindparam($key, $value);
    }

    public function query($RawQuery, $params = array()){

        $stmt = $this-> conn->prepare ($RawQuery);
        $this->setParams($stmt, $params);

        $stmt->execute();
        return $stmt;
        }

    public function select($rawQuery, $params = array()):array {
        $stmt = $this->query($rawQuery, $params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

}

?>