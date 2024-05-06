CREATE TABLE users (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name varchar(128),
    username varchar(128) UNIQUE,
    password varchar(255)
);