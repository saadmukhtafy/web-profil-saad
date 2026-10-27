CREATE DATABASE IF NOT EXISTS web_profile;

USE web_profile;

CREATE TABLE IF NOT EXISTS kontak (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    email VARCHAR(100),
    pesan TEXT
);

USE web_profile;

SELECT * FROM kontak;