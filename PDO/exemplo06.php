<?php

$conn = new PDO("mysql:host=localhost;dbname=estphp7", "root","123gorilao");

$conn->beginTransaction();

$stmt = $conn->prepare(" DELETE FROM tb_usuario WHERE id = ?");

$id = 2;

$stmt->execute(array($id));

$conn->rollBack();

?>