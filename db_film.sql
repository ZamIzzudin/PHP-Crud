CREATE DATABASE db_film;

USE db_film;

CREATE TABLE film(
id INT PRIMARY KEY AUTO_INCREMENT,
title VARCHAR(100) NOT NULL,
year INT(4) NOT NULL,
director VARCHAR(40),
actor VARCHAR(100),
genre VARCHAR(100),
trailer_link VARCHAR(2000),
thumbnail VARCHAR(2000),
w_poster VARCHAR(2000),
synopsis TEXT,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
);