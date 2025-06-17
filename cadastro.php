<?php
include 'database.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); 

$sql = "INSERT INTO Usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if ($conn->query($sql)) {
    echo "Conta criada com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}
?>
