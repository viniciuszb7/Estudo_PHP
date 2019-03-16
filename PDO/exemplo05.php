<?php

$conn = new PDO("mysql:host=localhost;dbname=estphp7", "root","123gorilao");

$stmt = $conn->prepare(" DELETE FROM tb_usuario WHERE id = :ID");

$id = 3;

$stmt->bindParam(":ID", $id);

$stmt->execute();

?>