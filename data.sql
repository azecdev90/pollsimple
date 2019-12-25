CREATE database pollsimple;
use pollsimple;

CREATE TABLE poll (
    id INT PRIMARY KEY AUTO_INCREMENT,
    poll_title VARCHAR(50) NOT NULL
) Engine = InnoDb;



CREATE TABLE poll_options
(
id INT PRIMARY KEY AUTO_INCREMENT,
poll_id INT NOT NULL,
name VARCHAR(20) NOT NULL,
pol int NOT NULL,
FOREIGN KEY(poll_id) REFERENCES poll(id) ON DELETE CASCADE
) Engine = InnoDb;

CREATE TABLE users
(
  id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(20) NOT NULL,
  password CHAR(60) NOT NULL,
  email VARCHAR(20) NOT NULL
) Engine = InnoDb;


CREATE TABLE votes
(
  id INT PRIMARY KEY AUTO_INCREMENT,
  poll_id INT NOT NULL,
  poll_option_id INT NOT NULL,
  votes INT DEFAULT 0,
  FOREIGN KEY(poll_id) REFERENCES poll(id) ON DELETE CASCADE
) Engine = InnoDb;


INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES ('1', 'Admin', '$2y$10$djaND9G.eqjorWTAWAfqxeDYykwzq9j4H1w6eA6PAFXfGSU0tVwea', 'admin@hotmail.com');
