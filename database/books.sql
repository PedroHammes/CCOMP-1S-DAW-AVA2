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
INSERT INTO books (title, subtitle, price, in_stock, img)
VALUES
('As Crônicas de Gelo e Fogo', 'A Guerra dos Tronos ', 78.99, 10, 'https://m.media-amazon.com/images/I/91+1SUO3vUL._SY342_.jpg'),
('As Crônicas de Gelo e Fogo', 'A Fúria dos Reis', 72.01, 10, 'https://m.media-amazon.com/images/I/51OxMUhiXwL._SY445_SX342_.jpg'),
('As Crônicas de Gelo e Fogo', 'A Tormenta de Espadas', 94.93, 10, 'https://m.media-amazon.com/images/I/51lbSoFZYwL._SY445_SX342_.jpg'),
('As Crônicas de Gelo e Fogo', 'O Festim dos Corvos', 71.90, 10, 'https://m.media-amazon.com/images/I/81PHekEOYhL._SY342_.jpg'),
('As Crônicas de Gelo e Fogo', 'A Dança dos Dragões', 92.59, 10, 'https://m.media-amazon.com/images/I/91gIftSmvhL._SY342_.jpg')
('O Senhor dos Anéis', 'A Sociedade do Anel', 39.90, 10, 'https://m.media-amazon.com/images/I/61VLT3aMviL._SY445_SX342_.jpg'),
('O Senhor dos Anéis', 'As Duas Torres', 31.15, 10, 'https://m.media-amazon.com/images/I/61lW1iKenkL._SY445_SX342_.jpg'),
('O Senhor dos Anéis', 'O Retorno do Rei', 32.11, 10, 'https://m.media-amazon.com/images/I/51Bsupv6jZL._SY445_SX342_.jpg');