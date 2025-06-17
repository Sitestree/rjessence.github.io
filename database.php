<?php
$host = "localhost";
$user = "root"; // Usuário do MySQL no Docker
$password = "senha123"; // Senha do MySQL no Docker
$dbname = "sistema"; // Nome do banco de dados

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
} else {
    echo "Conectado ao banco de dados!";
}
?>
