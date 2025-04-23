<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'livraria_da_avenida';

//  mysqli é uma classe padrão usada para conectar o PHP com o MySQL.
//  Usa como parâmetros os valores informados acima. O resultado da instância
//      desta classe é armazenado em $conn
$conn = new mysqli($host, $user, $password, $dbname);

//  Se a tentativa de conectar com o Banco de Dados deu erro a variável $conn 
//      armazenará a mensagem de erro na propriedade conect_error.
//  A condicional abaixo verifica que esta mensagem existe:
//      - se existe: significa que a conexão deu errado e a mensagem de erro é exibida
//      - se não existe: a conexão deu certo
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}


// NOTA: o símbolo '->' em PHP é usado para acessar propriedades e métodos de um objeto.
//  Assim como a notação de ponto em JavaScript.
//  PHP: objeto->propriedade
//  JS: objeto.propriedade

?>