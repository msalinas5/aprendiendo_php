CREATE DATABASE blog;
use blog;
CREATE TABLE usuarios(
    id int not null auto_increment,
    nombre varchar(25) not null unique,
    email varchar(255) not null unique,
    password varchar(255) not null,
    fecha_registro datetime not null,
    activo tinyint not null,
    primary key(id)
);