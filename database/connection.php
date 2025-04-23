<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'livraria_da_avenida';

// Criar a conexão
$conn = new mysqli($host, $user, $password, $dbname);

// Verificar se deu erro
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

?>