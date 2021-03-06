DROP TABLE IF EXISTS barrio;
DROP TABLE IF EXISTS localidad;
DROP TABLE IF EXISTS ciudad;
DROP TABLE IF EXISTS detalle_caso;
DROP TABLE IF EXISTS caso;
DROP TABLE IF EXISTS mascota;
DROP TABLE IF EXISTS palabra_servicio;
DROP TABLE IF EXISTS palabra_clave;
DROP TABLE IF EXISTS servicio;
DROP TABLE IF EXISTS centro_veterinario;
DROP TABLE IF EXISTS empleado;
DROP TABLE IF EXISTS usuario;


/*--------------------------------------------------------------------------------------------*/

CREATE TABLE IF NOT EXISTS usuario (
id INT AUTO_INCREMENT,
user_name VARCHAR (50) NOT NULL UNIQUE,
password VARCHAR (512) NOT NULL,
nombre VARCHAR (50),
apellido VARCHAR (50),
emailadd VARCHAR (255) NOT NULL UNIQUE,
rol ENUM ('medicoVet','duenoMascota','admin','duenoClinica') NOT NULL,
telefono INT,
PRIMARY KEY(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*--------------------------------------------------------------------------------------------*/
CREATE TABLE IF NOT EXISTS empleado (
  id INT AUTO_INCREMENT,
  id_dueno INT NOT NULL,
  id_empleado INT NOT NULL UNIQUE,
  especialidad VARCHAR (50),
  PRIMARY KEY (id),
  FOREIGN KEY (id_dueno) REFERENCES usuario(id),
  FOREIGN KEY (id_empleado) REFERENCES usuario(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
/*--------------------------------------------------------------------------------------------*/

CREATE TABLE IF NOT EXISTS centro_veterinario (
id INT AUTO_INCREMENT,
dueno_id INT,
nombre VARCHAR (50) NOT NULL UNIQUE,
direccion VARCHAR (300),
ciudad VARCHAR (50),
localidad VARCHAR (50),
barrio VARCHAR (50),
horaI time(2),
horaF time(2),
tipo ENUM ('consultorio','clinica','hospital') NOT NULL,
telefono INT,
PRIMARY KEY (id),
FOREIGN KEY (dueno_id) REFERENCES usuario(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*--------------------------------------------------------------------------------------------*/

CREATE TABLE IF NOT EXISTS servicio (
  id INT AUTO_INCREMENT,
  centro_veterinario_id INT,
  nombre VARCHAR (300),
  PRIMARY KEY(id),
  FOREIGN KEY (centro_veterinario_id) REFERENCES centro_veterinario(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*--------------------------------------------------------------------------------------------*/

CREATE TABLE IF NOT EXISTS palabra_clave (
  id INT AUTO_INCREMENT,
  PRIMARY KEY(id),
    nombre VARCHAR(50)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*--------------------------------------------------------------------------------------------*/

CREATE TABLE IF NOT EXISTS palabra_servicio (
  Servicio_id INT NOT NULL,
  palabra_clave_id INT NOT NULL,
  FOREIGN KEY (Servicio_id) REFERENCES servicio(id),
  FOREIGN KEY (palabra_clave_id) REFERENCES palabra_clave(id),
  UNIQUE (Servicio_id,palabra_clave_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*--------------------------------------------------------------------------------------------*/

CREATE TABLE IF NOT EXISTS mascota (
  id INT AUTO_INCREMENT,
  dueño_mas_id INT NOT NULL,
  nombre VARCHAR(50),
  especie VARCHAR(50),
  raza VARCHAR(50),
  fecha_nacimiento DATETIME,
  genero VARCHAR(50),
  color VARCHAR(50),
  PRIMARY KEY(id),
  FOREIGN KEY (dueño_mas_id) REFERENCES usuario(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*--------------------------------------------------------------------------------------------*/

CREATE TABLE IF NOT EXISTS caso (
  id INT NOT NULL,
  mascota_id INT NOT NULL,
  medicoVet_id INT NOT NULL,
  calificacion INT,
  costo FLOAT,
  PRIMARY KEY(id),
  FOREIGN KEY (mascota_id) REFERENCES mascota(id),
  FOREIGN KEY (medicoVet_id) REFERENCES usuario(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*--------------------------------------------------------------------------------------------*/

CREATE TABLE IF NOT EXISTS detalle_caso (
  id INT AUTO_INCREMENT,
  caso_id int NOT NULL,
  PRIMARY KEY(id),
  info VARCHAR(500),
  FOREIGN KEY (caso_id) REFERENCES caso(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*--------------------------------------------------------------------------------------------*/

 CREATE TABLE IF NOT EXISTS ciudad (
  id INT AUTO_INCREMENT,
  PRIMARY KEY(id),
  nombre VARCHAR(500)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*--------------------------------------------------------------------------------------------*/

 CREATE TABLE IF NOT EXISTS localidad (
  id INT AUTO_INCREMENT,
  ciudad_id int NOT NULL,
  PRIMARY KEY(id),
  nombre VARCHAR(500),
  FOREIGN KEY (ciudad_id) REFERENCES ciudad(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*--------------------------------------------------------------------------------------------*/

 CREATE TABLE IF NOT EXISTS barrio (
  id INT AUTO_INCREMENT,
  localidad_id int NOT NULL,
  PRIMARY KEY(id),
  nombre VARCHAR(500),
  FOREIGN KEY (localidad_id) REFERENCES localidad(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*--------------------------------------------------------------------------------------------*/



  INSERT INTO ciudad (id,nombre) VALUES (1,'Bogota');
  INSERT INTO ciudad (id,nombre) VALUES (2,'Medellin');

  INSERT INTO localidad (id,ciudad_id,nombre) VALUES (1,1,'Kennedy');

  INSERT INTO barrio (id,localidad_id,nombre) VALUES (1,1,'Argelia');

/*--------------------------------------------------------------------------------------------*/
