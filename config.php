<?php

$host = 'localhost';
$dbname = 'LivrariaDaTravessa';
$username = 'root';
$password = '21Pilots!';

try {
    // Conexão com MySQL usando PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Configura o PDO para lançar exceções em caso de erro
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Erro ao conectar com banco de dados: " . $e->getMessage();
}

?>