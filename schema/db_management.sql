//                                                            HOSPITAL4
CREATE DATABASE IF NOT EXISTS Equipo4;
USE Equipo4;
create table if not exists t_usuario(
  id_usuario int not null auto_increment,
  usuario varchar(255), 
  password varchar(255), 
  nombre varchar(255), 
  apellido varchar(255),
   primary key(id_usuario))engine=InnoDB; 

CREATE TABLE paciente (
  Cod_pac INT NOT NULL AUTO_INCREMENT,
  nombre_pac VARCHAR(45) NOT NULL,
  Apellido_pac VARCHAR(45) NOT NULL,
  Edad_pac INT NOT NULL,
  NomFam_pac VARCHAR(45) NOT NULL,
  Causa VARCHAR(45) NOT NULL,
  PRIMARY KEY (Cod_pac)
  )engine=InnoDB;
CREATE TABLE medico (
  Cod_med INT NOT NULL AUTO_INCREMENT,
  Nombre_med VARCHAR(45) NOT NULL,
  Apellido_med VARCHAR(45) NOT NULL,
  PRIMARY KEY (Cod_med)
  )engine=InnoDB;

CREATE TABLE administracion (
    id INT NOT NULL AUTO_INCREMENT,
    accion VARCHAR(45) NOT NULL,
    tabla_modificada VARCHAR(45) NOT NULL,
    dato_anterior VARCHAR(45) NOT NULL,
    dato_nuevo VARCHAR(45) NOT NULL,
    modificado_por VARCHAR(45) NOT NULL,
    fecha_modificado DATE,
    hora_modificada TIME,
    PRIMARY KEY (id)
 )engine=InnoDB;

 DELIMITER $$
 CREATE TRIGGER insertar_pac
 AFTER INSERT ON paciente
 FOR EACH ROW
 BEGIN
	INSERT INTO administracion(accion,tabla_modificada,dato_anterior,dato_nuevo,modificado_por,fecha_modificado,hora_modificada)
    VALUES ('Insertar','Paciente',' ',new.nombre_pac,LEFT(USER(), INSTR(USER(), '@') - 1),CURDATE(),TIME(NOW()));
 END;$$

 DELIMITER $$
 CREATE TRIGGER modificar_pac
 AFTER UPDATE ON paciente
 FOR EACH ROW
 BEGIN
	INSERT INTO administracion(accion,tabla_modificada,dato_anterior,dato_nuevo,modificado_por,fecha_modificado,hora_modificada)
    VALUES ('Modificar','Paciente',old.nombre_pac,new.nombre_pac,LEFT(USER(), INSTR(USER(), '@') - 1),CURDATE(),TIME(NOW()));
 END;$$
 
 DELIMITER $$
 CREATE TRIGGER eliminar_pac
 AFTER DELETE ON paciente
 FOR EACH ROW
 BEGIN
	INSERT INTO administracion(accion,tabla_modificada,dato_anterior,dato_nuevo,modificado_por,fecha_modificado,hora_modificada)
    VALUES ('Eliminar','Paciente',old.nombre_pac,' ',LEFT(USER(), INSTR(USER(), '@') - 1),CURDATE(),TIME(NOW()));
 END;$$
 
 DELIMITER $$
 CREATE TRIGGER insertar_med
 AFTER INSERT ON medico
 FOR EACH ROW
 BEGIN
	INSERT INTO administracion(accion,tabla_modificada,dato_anterior,dato_nuevo,modificado_por,fecha_modificado,hora_modificada)
    VALUES ('Insertar','Medico',' ',new.Nombre_med,LEFT(USER(), INSTR(USER(), '@') - 1),CURDATE(),TIME(NOW()));
 END;$$
 
  DELIMITER $$
 CREATE TRIGGER modificar_med
 AFTER UPDATE ON medico
 FOR EACH ROW
 BEGIN
	INSERT INTO administracion(accion,tabla_modificada,dato_anterior,dato_nuevo,modificado_por,fecha_modificado,hora_modificada)
    VALUES ('Modificar','Medico',old.Nombre_med,new.Nombre_med,LEFT(USER(), INSTR(USER(), '@') - 1),CURDATE(),TIME(NOW()));
 END;$$
 
  DELIMITER $$
 CREATE TRIGGER eliminar_med
 AFTER DELETE ON medico
 FOR EACH ROW
 BEGIN
	INSERT INTO administracion(accion,tabla_modificada,dato_anterior,dato_nuevo,modificado_por,fecha_modificado,hora_modificada)
    VALUES ('Eliminar','Medico',old.Nombre_med,' ',LEFT(USER(), INSTR(USER(), '@') - 1),CURDATE(),TIME(NOW()));
 END;$$
 
 

