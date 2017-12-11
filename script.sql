CREATE DATABASE blog
DEFAULT CHARACTER SET utf8;

use blog;

CREATE TABLE usuarios(
    id int not null UNIQUE auto_increment,
    nombre varchar(25) not null unique,
    email varchar(255) not null unique,
    password varchar(255) not null,
    fecha_registro datetime not null,
    activo tinyint not null,
    primary key(id)
);

CREATE TABLE entradas(
    id INT NOT NULL UNIQUE auto_increment,
    autor_id INT NOT NULL,
    url VARCHAR(255) NOT NULL UNIQUE,
    titulo VARCHAR(255) NOT NULL UNIQUE,
    texto TEXT CHARACTER SET utf8 NOT NULL,
    fecha DATETIME NOT NULL,
    activa TINYINT NOT NULL,
    primary key(id),
    FOREIGN KEY (autor_id) REFERENCES usuarios(id) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE comentarios(
    id  INT NOT NULL UNIQUE auto_increment,
    autor_id INT NOT NULL,
    entrada_id INT NOT NULL,
    titulo VARCHAR(255) NOT NULL ,
    texto TEXT CHARACTER SET utf8 NOT NULL,
    fecha DATETIME NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (autor_id) REFERENCES usuarios(id) ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY (entrada_id) REFERENCES entradas(id) ON UPDATE CASCADE ON DELETE RESTRICT
);