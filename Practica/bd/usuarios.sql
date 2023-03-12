
create database Practica;

use Practica;

create table usuarios(
				id int auto_increment,
				nombre varchar(50),
				apellido varchar(50),
				usuario varchar(50),
				password text(50),
				rol int(3),
				primary key(id)
					);