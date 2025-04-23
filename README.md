# Livraria da Avenida 📚

Projeto desenvolvido em PHP com MySQL.

## 🚀 Como rodar o projeto

### 1. Clonar o repositório

```bash
git clone https://github.com/PedroHammes/CCOMP-1S-DAW-AVA2
cd CCOMP-1S-DAW-AVA2
```

### 2. Importar o banco de dados

1. Acesse o seu painel do phpMyAdmin (ex: http://localhost/phpmyadmin)
2. Crie um banco de dados chamado livraria_da_avenida
3. Importe o arquivo database/livraria_da_avenida.sql do projeto no seu phpMyAdmin

> Talvez seja necessário instalar o XAMPP primeiro, se for o caso faça o download [aqui](https://www.apachefriends.org/pt_br/index.html)


### 3. Confiuração de ambiente

Edite o arquivo database/connection.php com suas credenciais do MySQL:
```
$host = 'localhost';
$usuario = 'root';
$senha = ''; (ou 'sua_senha')
$banco = 'livraria_da_avenida';
```


### 4. Rodar o projeto

1. Inicie o XAMPP (Apache e MySQL)
2. Acesse o projeto no navegador via http://localhost/DAW-AVA2
