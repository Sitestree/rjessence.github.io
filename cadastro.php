<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $categoria = $_POST["categoria"];
    $descricao = $_POST["descricao"];
    $volume = $_POST["volume"];
    $preco = $_POST["preco"];
    $promocao = $_POST["promocao"];

    $sql = "INSERT INTO Produto (categoria, descricao, volume, preco, promocao) VALUES ('$categoria', '$descricao', '$volume', '$preco', '$promocao')";

    if ($conn->query($sql) === TRUE) {
        echo "Produto cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
    }

    $conn->close();
}
?>
