ALTER USER 'sql12732575'@'%' IDENTIFIED WITH mysql_native_password BY 'anq5vMnmJf';
FLUSH PRIVILEGES;
USE defaultdb;
create table dreams(
   dream VARCHAR(100) NOT NULL,
   epoch int(30) NOT NULL
);
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);
INSERT INTO users (name, email) VALUES
('Alice', 'alice@example.com'),
('Jane', 'Jane@example.com');
