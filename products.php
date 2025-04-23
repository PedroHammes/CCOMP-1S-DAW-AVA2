<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <nav>
        <a href="./index.php">Início</a>
        <a href="./about.php">Sobre</a>
        <a href="./products.php">Produtos</a>
        <a href="./news.php">Novidades</a>
        <a href="./contact.php">Contato</a>
    </nav>
    <h1>Produtos</h1>

    <?php
    // Inclui a conexão com o banco de dados
    include 'config.php';

    // Consulta o DB para pegar os produtos
    $query = "SELECT * FROM products";
    $stmt = $pdo->query($query);

    // Exibe os produtos:
    while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<div>";
        echo "<h3>" . htmlspecialchars($produto['name']) . "</h3>";
        echo "<p> R$" . htmlspecialchars($produto['price']) . "</p>";
        echo "</div>";
    }
    ?>
</body>
</html>