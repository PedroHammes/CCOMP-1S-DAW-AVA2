<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
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

        <section>
            <h2>Contate nossa equipe</h2>
            <table>
                <caption>
                    Membros:
                </caption>

                <thead>
                    <tr>
                        <th>Colaborador</th>
                        <th>WhatsApp</th>
                        <th>LinkedIn</th>
                        <th>GitHub</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="table-contact">Pedro Hammes</td>
                        <td class="table-link">
                            <a href="https://wa.me/5521984540717" target="_blank">Mensagem</a>
                        </td>
                        <td class="table-link">
                            <a href="https://www.linkedin.com/in/pedrohammes/" target="_blank">Conecte-se</a>
                        </td>
                        <td class="table-link">
                            <a href="https://github.com/PedroHammes" target="_blank">mais projetos</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-contact">Beatriz Reis</td>
                        <td class="table-link">
                            <a href="https://wa.me/5521980181397" target="_blank">Mensagem</a>
                        </td>
                        <td class="table-link">
                            <a href="#" target="_blank">Conecte-se</a>
                        </td>
                        <td class="table-link">
                            <a href="#" target="_blank">mais projetos</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-contact">Letícia Braga</td>
                        <td class="table-link">
                            <a href="https://wa.me/5521986956514" target="_blank">Mensagem</a>
                        </td>
                        <td class="table-link">
                            <a href="#" target="_blank">Conecte-se</a>
                        </td>
                        <td class="table-link">
                            <a href="#" target="_blank">mais projetos</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-contact">Jonas Tavares</td>
                        <td class="table-link">
                            <a href="https://wa.me/5521974571187" target="_blank">Mensagem</a>
                        </td>
                        <td class="table-link">
                            <a href="#" target="_blank">Conecte-se</a>
                        </td>
                        <td class="table-link">
                            <a href="#" target="_blank">mais projetos</a>
                        </td>
                    </tr>
                </tbody>

            </table>
    </section>
    </main>



</body>
</html>