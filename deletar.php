<?php
include 'database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM Produto WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Produto deletado com sucesso!";
    } else {
        echo "Erro ao excluir: " . $conn->error;
    }

    $conn->close();
}
?>
