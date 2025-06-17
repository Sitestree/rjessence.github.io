<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    // Exibir os dados recebidos
    echo "Nome: " . $nome . "<br>Email: " . $email . "<br>";

    if(empty($nome) || empty($email) || empty($senha)) {
        die("Erro: Campos vazios!");
    }

    $sql = "INSERT INTO Usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if ($conn->query($sql) === TRUE) {
        echo "Conta criada com sucesso!";
    } else {
        echo "Erro ao criar conta: " . $conn->error;
    }

    $conn->close();
}
?>
