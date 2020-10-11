#Challenger

#Projeto Criado em 10/10/2020

#Tecnologias utilizadas:
HTML, CSS, JS, PHP, Composer, Cakephp, Mysql

#O quê é?
Sistema se basea em um simples CRUD de usuários:
Nome
CPF
Data Nascimento
Email
Tefone
Endereço
Cidade
Estado

Ao cadastrar um novo usuário, quando selecionar o estado deverá aparecer as suas respectivas cidades no campo cidade

Listar os usuários cadastrados

Ao clicar em um usuário, redirecionar para uma tela com as informações do mesmo

Editar os dados do usuário

Deletar usuários a partir da tela de listagem ou de edição usando ajax


#composer create-project --prefer-dist cakephp/app  challenger



//Database Mysql

create database challenger;

use challenger;

CREATE TABLE `challenger`.`users` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(100) NOT NULL , 
    `cpf` VARCHAR(11) NOT NULL , 
    `dt_nascimento` DATE NOT NULL , 
    `email` VARCHAR(100) NOT NULL , 
    `phone` VARCHAR(14) NOT NULL ,
    `address` VARCHAR(200) NOT NULL ,
    `city` VARCHAR(100) NOT NULL , 
    `state` VARCHAR(100) NOT NULL , 
    `created` DATETIME NOT NULL , 
    `modified` DATETIME NULL , 
    PRIMARY KEY (`id`)) ENGINE = InnoDB;





