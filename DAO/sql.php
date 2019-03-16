<?php

class Sql extends PDO {
    private $conn;

    public function  __construct(){
       $this->conn ("mysql:host=localhost;dbname=estphp7", "root", "123gorilao");

    }

    public function query($rawQuery, $params = array()){
        $stmt -$this->conn>$this->prepare($);

        foreach ($params as $key => $value){
            $stmt ->bindParam($key, $value);
        }



    }


    public function ()

}