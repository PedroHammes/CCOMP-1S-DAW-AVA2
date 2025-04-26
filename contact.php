<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
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
    <h1>Contato</h1>

    <form action="send.php" method="POST">

            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="message">Mensagem:</label>
                <textarea name="message" id="message" rows="5" required></textarea>
            </div>
            <button type="submit">
                Enviar
            </button>
        </form>
</body>
</html>