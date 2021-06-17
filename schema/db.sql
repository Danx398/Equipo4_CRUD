create database if not exists pruebaBad;
use pruebaBad;
create table if not exists t_usuario(id_usuario int not null auto_increment,
                                    usuario varchar(255), password varchar(255), 
                                    primary key(id_usuario))engine=InnoDB; 