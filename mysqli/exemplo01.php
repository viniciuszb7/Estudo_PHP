<?php
$conn = new mysqli("localhost","root","123gorilao", "estphp7");

if ($conn->connect_error){
    echo "Error" . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuario (deslogin, desenha) VALUES(?,?)");

$stmt->bind_param( "ss", $login, $pass);

$login = "vzb7";
$pass ="123";
$stmt->execute();



?>