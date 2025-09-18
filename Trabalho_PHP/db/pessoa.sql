create database if not exists pessoa ;
use pessoa;

create table if not exists pessoa (
  id_pessoa int primary key auto_increment,
  nome_pes varchar(150) not null,
  cpf_pes char(11) not null unique,
  telefone_pes varchar(11)
) ;