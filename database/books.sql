-- Criação da tabela products
CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    subtitle VARCHAR(255),
    price DECIMAL(10, 2) NOT NULL,
    img VARCHAR(255),
    in_stock INT NOT NULL
);

-- População da tabela products
INSERT INTO books (title, subtitle, price, in_stock)
VALUES
('A Saga do Vampiro Rei', 'Bento', 29.90, 10),
('A Saga do Vampiro Rei', 'A Bruxa Tereza', 39.90, 10),
('A Saga do Vampiro Rei', 'Cantarzo', 49.90, 10),
('O Senhor dos Anéis', 'A Sociedade do Anel', 39.90, 10),
('O Senhor dos Anéis', 'As Duas Torres', 39.90, 10),
('O Senhor dos Anéis', 'O Retorno do Rei', 39.90, 10);