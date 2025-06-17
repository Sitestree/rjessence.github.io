<?php
include 'database.php';

$sql = "SELECT * FROM Produto";
$result = $conn->query($sql);

echo "<table border='1'>";
echo "<tr><th>Categoria</th><th>Descrição</th><th>Volume</th><th>Preço</th><th>Promoção</th><th>Ação</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['categoria']}</td>
            <td>{$row['descricao']}</td>
            <td>{$row['volume']} ml</td>
            <td>R$ {$row['preco']}</td>
            <td>{$row['promocao']}</td>
            <td><a href='deletar.php?id={$row['id']}'>Excluir</a></td>
          </tr>";
}
echo "</table>";

$conn->close();
?>
