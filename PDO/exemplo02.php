<?php

$conn = new PDO("sqlsrv:Database=dbphp7; server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "123gorilao");

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