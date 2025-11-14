CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200),
    body TEXT
);

INSERT INTO posts (title, body) VALUES
('First Post', 'Sample text'),
('Second Post', 'More text'),
('Third Post', 'Another post');
