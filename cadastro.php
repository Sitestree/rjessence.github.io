<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    // Exibir os dados que estão sendo recebidos
    echo "<p>Nome: $nome</p><p>Email: $email</p>";

    // Verificar se campos não estão vazios
    if(empty($nome) || empty($email) || empty($senha)) {
        die("Erro: Campos vazios!");
    }

    // Inserir no banco de dados
    $sql = "INSERT INTO Usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if ($conn->query($sql) === TRUE) {
        echo "Conta criada com sucesso!";
    } else {
        echo "Erro ao criar conta: " . $conn->error;
    }

    $conn->close();
}
?>
