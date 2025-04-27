# CCOMP-1S-DAW-AVA2 - Livraria da Avenida
## 📚 Sobre o Projeto
Este é um projeto acadêmico avaliativo desenvolvido para a disciplina de Desenvolvimento de Aplicações Web do curso de Ciência da Computação.
O objetivo do projeto é simular um site institucional de uma empresa fictícia, com páginas públicas de navegação e integração com banco de dados.

## 🎯 Funcionalidades
Navegação entre páginas (Início, Sobre, Produtos, Novidades, Contato).

Cadastro e listagem dinâmica de produtos usando banco de dados MySQL.

Estilização personalizada utilizando CSS puro.

Estruturação de páginas em PHP, integrando front-end e back-end.

## 🚀 Tecnologias Utilizadas
PHP 8

MySQL 8

HTML5 / CSS3

XAMPP (pacote PHP + MySQL + phpMyAdmin)

phpMyAdmin para gerenciamento do banco de dados.

## 🛠️ Como instalar e rodar o projeto localmente
Siga os passos abaixo com atenção para configurar o ambiente corretamente:

### 1. Instalar o XAMPP
Baixe e instale o XAMPP: Download XAMPP

Durante a instalação, certifique-se de selecionar o Apache e o MySQL.

### 2. Configurar o php.ini (caso necessário)
Se o XAMPP não ativar o MySQL automaticamente ou se o PHP der erro com extensões, siga:

No XAMPP, clique em Config (do módulo Apache) e selecione php.ini.

Dentro do arquivo php.ini, descomente (removendo o ; no início) as seguintes linhas:

```
extension=mysqli
extension=pdo_mysql
```

Salve e feche o arquivo.

Reinicie o Apache no XAMPP.

### 3. Subir o Apache e o MySQL
Abra o XAMPP Control Panel.

Clique em Start para o Apache.

Clique em Start para o MySQL.

Certifique-se de que as portas 80 (Apache) e 3306 (MySQL) estejam livres.

### 4. Clonar o repositório do projeto
Abra o terminal/cmd e rode:

```
git clone https://github.com/PedroHammes/CCOMP-1S-DAW-AVA2.git
```
Ou baixe o ZIP do repositório e extraia.

### 5. Mover o projeto para o diretório do servidor
Copie a pasta do projeto para o diretório htdocs do XAMPP.

Normalmente o caminho é: C:\xampp\htdocs

Exemplo:

````C:\xampp\htdocs\CCOMP-1S-DAW-AVA2````

### 6. Importar o banco de dados
Acesse o navegador e entre no endereço:

````http://localhost/phpmyadmin````

Clique em Importar.

Selecione o arquivo books.sql localizado na pasta:

````/DATABASE/books.sql````

Clique em Executar para importar o banco de dados.

Isso criará a estrutura de tabelas necessária para o projeto funcionar.

### 7. Rodar o projeto
Agora, basta acessar no navegador:

````http://localhost/CCOMP-1S-DAW-AVA2/````

A página inicial do projeto será carregada!

## 📂 Estrutura de Pastas
bash
Copiar código
/DATABASE          # Script SQL do banco de dados
/css               # Estilos CSS
/img               # Imagens usadas no site
/pages             # Páginas adicionais (sobre, produtos, etc.)
index.php          # Página inicial
## ℹ️ Observações Importantes
Verifique se o Apache e MySQL estão ativos sempre que quiser rodar o projeto.

Se alterar a estrutura do banco de dados, lembre-se de atualizar o script /DATABASE/books.sql.

Se tiver problemas com o PHP ou MySQL, reiniciar o XAMPP geralmente resolve.

## ✨ Autores
Pedro Hammes [LinkedIn](https://www.linkedin.com/in/pedrohammes/) | [GitHub](https://github.com/PedroHammes)

Beatriz Reis [Linkedin](https://www.linkedin.com/in/beatriz-reis-6ba79b236/) | [GitHub](https://github.com/beatrizdosreisb)

Jonas Tavares [Linkedin](https://www.linkedin.com/in/jonas-tavares-984315160/) | [GitHub](https://github.com/Tavarius98)

Letícia [Linkedin](https://www.linkedin.com/in/leticia-daniella-braga-a233692a6/) | [GitHub](https://github.com/leticiadaniellabraga)