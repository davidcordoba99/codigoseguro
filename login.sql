CREATE DATABASE IF NOT EXISTS login;

USE login

CREATE TABLE IF NOT EXISTS users (

     user VARCHAR(255),
     pass VARCHAR(255)
);

INSERT INTO users (user, pass)
VALUES ('david', 'cordoba');

INSERT INTO users (user, pass)
VALUES ('koxme', '$2y$10$U6Wp.he9O.JQWucsJh.tPOOv4RKM.kxnBboCrPwTbjdNXqIlotyPO');