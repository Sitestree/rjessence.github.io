<?php
$host = "localhost";
$user = "root"; // Usuário padrão do MySQL
$password = "senha123"; // Senha definida no Docker
$dbname = "sistema"; // Nome do banco criado no Docker

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
} else {
    echo "Conectado ao banco de dados no Docker!";
}
?>
