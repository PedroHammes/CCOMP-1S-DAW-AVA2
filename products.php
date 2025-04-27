<?php
    // Disponibiliza dados do banco para a página atual
    include './database/connection.php';

    $sql = "SELECT * FROM books";
    $query = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produtos</title>
    <link rel="stylesheet" href="./style/style.css">
    <script src="./navbarcontrol.js"></script>
</head>
<body>
    <nav>
        <a href="./index.php">Início</a>
        <a href="./about.php">Sobre</a>
        <a href="./products.php">Produtos</a>
        <a href="./news.php">Novidades</a>
        <a href="./contact.php">Contato</a>
    </nav>

    <main>
        <h1>Produtos</h1>
        <!-- A condicional abaixo verifica se há registros no banco de dados -->
        <?php if ($query->num_rows > 0): ?>
            <!-- 
                Se existirem, para cada produto ele criará uma div com:
                título, subtítulo, preço e estoque
            -->
            <section class="products">
                <?php while($book = $query->fetch_assoc()): ?>
                <div class="card">
                    <img 
                    src="<?php echo htmlspecialchars($book['img']); ?>"
                    alt="Capa de <?php echo htmlspecialchars($book['title']); ?>"
                    >
                    <h2>
                        <?php echo $book['title']?> - <?php echo $book['subtitle']?>
                    </h2>
                    <p class="price">
                        R$ <?php echo number_format($book['price'], 2, ',', '.') ?>
                    </p>
                    <p>
                        Estoque: <?php echo $book['in_stock'] ?>
                    </p>
                </div>
                <?php endwhile; ?>
            </section>
            <!-- 
                Se não houver registros apenas cria um parágrafo informando que 
                não há registros no BD
            -->
        <?php else: ?>
            <p>Nenhum produto encontrado.</p>
        <?php endif; ?>
    </main>

    <?php $conn->close(); ?>
</body>
</html>