<?php
    // Disponibiliza o banco de dados para ser acessado por esta página
    include './database/connection.php';

    // Com o DB disponível, seleciona todos os registros dele
    //      e os armazena em $sql
    $sql = "SELECT * FROM news";

    // Usa o método query de $conn (instância de mysqli) para consultar os registros
    // O objeto com resultados é armazenado em $query
    $query = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novidades</title>
    <link rel="stylesheet" href="estilo.css">
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
    <h1>Novidades</h1>


    <div class="news">
    <!--
        Usa notação de seta (->) para acessar a propriedade do número de linhas
            de $query. Este número indica a quantidade de registros retornados do DB
    -->
    <?php
    if ($query->num_rows > 0) :
    ?>
        <!-- Se mais de 0 registros forem retornados eles serão renderizados -->
         <?php
         while($new = $query->fetch_assoc()) :
         ?>
            <div class="new">
                <h2>
                    <?php echo $new['title']?>
                </h2>
                <p>
                    <?php echo $new['news_description']?>
                </p>
                <p>
                    Data prevista: <?php echo $new['expected_date']?>
                </p>
            </div>
         <?php endwhile ?>
    <?php else: ?>
        <h3>Nenhuma novidade encontrada</h3>
    <?php endif; ?>

    <!-- 
        Assim que os registros são renderizados (ao final da condicional)
            a conexão é fechada para poupar recursos do dispositivo.
        Quando a página for recarregada a conexão é aberta novamente.
    -->
    <?php $conn->close(); ?>
    </div>
</body>
</html>