DROP DATABASE IF EXISTS Prova2;
CREATE DATABASE Prova2;
use Prova2;
CREATE TABLE fluxo_caixa(
id int primary key,
data date,
tipo varchar(10),
valor decimal(10,2),
historico varchar(150),
cheque varchar(3)
);