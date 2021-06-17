#                                                            HOSPITAL4 

DROP DATABASE hospital4;
CREATE DATABASE IF NOT EXISTS hospital4;
USE hospital4;

CREATE TABLE paciente (
  Cod_pac INT NOT NULL,
  nombre_pac VARCHAR(45) NOT NULL,
  Apellido_pac VARCHAR(45) NOT NULL,
  Edad_pac INT NOT NULL,
  NomFam_pac VARCHAR(45) NOT NULL,
  Causa VARCHAR(45) NOT NULL,
  PRIMARY KEY (Cod_pac)
  );
CREATE TABLE medico (
  Cod_med INT NOT NULL,
  Nombre_med VARCHAR(45) NOT NULL,
  Apellido_med VARCHAR(45) NOT NULL,
  PRIMARY KEY (Cod_med)
  );
CREATE TABLE ingreso (
  Cod_habi INT NOT NULL,
  Habitacion VARCHAR(45) NOT NULL,
  Fecha_ing DATE NOT NULL,
  Hora_ing TIME NOT NULL,
  Cod_pac INT NOT NULL,
  Cod_med INT NOT NULL,
  PRIMARY KEY (Cod_habi)
  );

ALTER TABLE ingreso ADD FOREIGN KEY (Cod_pac) REFERENCES paciente(Cod_pac) ON UPDATE CASCADE,
					ADD FOREIGN KEY (Cod_med) REFERENCES medico(Cod_med) ON UPDATE CASCADE;

CREATE TABLE administracion (
    id INT NOT NULL AUTO_INCREMENT,
    accion VARCHAR(45) NOT NULL,
    tabla_modificada VARCHAR(45) NOT NULL,
    dato_anterior VARCHAR(45) NOT NULL,
    dato_nuevo VARCHAR(45) NOT NULL,
    modificado_por VARCHAR(45) NOT NULL,
    ip_usuario INT,
    fecha_modificado DATE,
    hora_modificada TIME,
    PRIMARY KEY (id)
 );

 DELIMITER $$
 CREATE TRIGGER insertar_pac
 AFTER INSERT ON paciente
 FOR EACH ROW
 BEGIN
	INSERT INTO administracion(accion,tabla_modificada,dato_anterior,dato_nuevo,modificado_por,ip_usuario,fecha_modificado,hora_modificada)
    VALUES ('Insertar','Paciente',' ',new.nombre_pac,LEFT(USER(), INSTR(USER(), '@') - 1),'1',CURDATE(),TIME(NOW()));
 END;$$

