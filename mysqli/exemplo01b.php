
<?php
$conn = new mysqli("localhost","root","123gorilao", "estphp7");

if ($conn->connect_error){
    echo "Error" . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuario ORDER BY deslogin");

$data = array();

while ($row = $result->fetch_array()){
    array_push($data,$row);
}

echo json_encode($data);


?>