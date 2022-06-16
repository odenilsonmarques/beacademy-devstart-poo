create database db_story;


use db_story;

create table tb_category(
    id int(11) not null primary key auto_increment, 
    name varchar(45) not null, 
    description varchar (100) not null
);

insert into tb_category(name, description)
values
('Informatica', 'Produto de informatica e acessorios para computador'),
('Escritorio', 'Canetas, Cardenos, folhas'),
('Eletronicos', 'Tvs, Som portatil, caixa de som');