create database Livros;
use Livros;

CREATE TABLE livros(
	ID integer auto_increment primary key,
	TITULO varchar(255),
    AUTOR varchar(255),
	ANO_PUBLICACAO varchar(255),
    EDITORA varchar(255)
);

VALUES (123, "titulo", "Robson", 1990, "Alissa");

SELECT * FROM livros;
