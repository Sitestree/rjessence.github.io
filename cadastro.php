<?php
// Conexão com o banco de dados
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "rj_essence";

$conn = new mysqli($host, $usuario, $senha, $banco);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Recebendo os dados do formulário
$primeiroNome = $_POST["primeiro-nome"];
$sobrenome = $_POST["sobrenome"];
$email = $_POST["email"];
$senha = password_hash($_POST["senha"], PASSWORD_DEFAULT); // Senha criptografada

// Verifica se o e-mail já está cadastrado
$check = $conn->prepare("SELECT id FROM usuarios WHERE email = ?");
$check->bind_param("s", $email);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    echo "E-mail já cadastrado!";
} else {
    // Insere o novo usuário
    $stmt = $conn->prepare("INSERT INTO usuarios (primeiro_nome, sobrenome, email, senha) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $primeiroNome, $sobrenome, $email, $senha);
    
    if ($stmt->execute()) {
        echo "Conta criada com sucesso!";
        header("Location: ../login.html?cadastro=sucesso");
    } else {
        echo "Erro ao cadastrar: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
