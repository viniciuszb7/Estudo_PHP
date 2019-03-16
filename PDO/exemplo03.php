<?php

$conn = new PDO("mysql:host=localhost;dbname=estphp7", "root","123gorilao");

$stmt = $conn->prepare("INSERT INTO tb_usuario (deslogin, desenha)VALUES(:LOGIN,:PASSWORD)");

$login = "jose";
$password = "123456";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido OK";

?>