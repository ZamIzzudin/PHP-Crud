--  Make database and tables
CREATE DATABASE db_film;

USE db_film;

CREATE TABLE film(
    id INT PRIMARY KEY ,
    title VARCHAR(100) NOT NULL,
    year INT(4) NOT NULL,
    director VARCHAR(100),
    actor VARCHAR(500),
    synopsis TEXT,
    id_category INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE poster(
    id_film INT NOT NULL,
    trailer_link VARCHAR(3000),
    thumbnail VARCHAR(3000),
    w_poster VARCHAR(3000),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE category(
    id INT PRIMARY KEY ,
    category VARCHAR(20) NOT NULL,
    age VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE genre(
    id INT PRIMARY KEY ,
    genre VARCHAR(20) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE film_genre(
    id_genre INT NOT NULL,
    id_film INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Add foreign key for each table

ALTER TABLE film_genre ADD FOREIGN KEY (id_genre) REFERENCES genre(id);

ALTER TABLE film_genre ADD FOREIGN KEY (id_film) REFERENCES film(id);

ALTER TABLE poster ADD FOREIGN KEY (id_film) REFERENCES film(id);

ALTER TABLE film ADD FOREIGN KEY (id_category) REFERENCES category(id);

-- Add some data that we wont add in CRUD system
INSERT INTO category(id, category, age) VALUES 
    (1, "SU", "All Age"),
    (2, "13+", "Above 13 years old"),
    (3, "17+", "Above 17 years old"),
    (4, "21+", "Above 21 years old");

INSERT INTO genre(id, genre) VALUES 
    (1,"Action"),
    (2,"Adventure"),
    (3,"Animation"),
    (4,"Comedy"),
    (5,"Drama"),
    (6,"Fantasy"),
    (7,"Historical"),
    (8,"Horror"),
    (9,"Mystery"),
    (10,"Romance"),
    (11,"Sci-Fi"),
    (12,"Superhero"),
    (13,"Thriller"),
    (14,"Western");