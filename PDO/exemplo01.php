<?php

$conn = new PDO("mysql:dbname=estphp7; host=localhost", "root", "123gorilao");

$stmt = $conn->prepare("SELECT * FROM tb_usuario ORDER BY deslogin ");

$stmt->execute();

$results=$stmt->fetchALL(PDO::FETCH_ASSOC);

foreach ($results as $row){

    foreach ($row as $key =>$value){

        echo "<strong>" .$key.":</strong>".$value."<br/>";
    }

    echo "===============================================<br>";

}

var_dump($results);


?>