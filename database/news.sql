-- Criação da tabela novidades
CREATE TABLE news (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    news_description VARCHAR(255) NOT NULL,
    img VARCHAR(255),
    expected_date DATE
);

-- População da tabela products
INSERT INTO news (title, news_description, expected_date) 
VALUES
('Harry Potter', 'Adicionaremos ao catálogo a coleção Harry Potter', 2025-04-30),
('Bienal do Livro 2025 - Rio de Janeiro', 'A Livraria da Avenida marcará presença na Bienal do Livro', 2025-06-13);