<?php

$conn = new PDO("mysql:host=localhost;dbname=estphp7", "root","123gorilao");

$stmt = $conn->prepare(" UPDATE tb_usuario SET deslogin = :LOGIN, desenha = :PASSWORD WHERE id = :ID");

$login = "Pedro";
$password = "dd456";
$id = 2;


$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();


?>