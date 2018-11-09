/*--------------------------------------------------------------------------------------------*/

CREATE TABLE IF NOT EXISTS usuario (
id INT AUTO_INCREMENT,
user_name VARCHAR (50) NOT NULL UNIQUE,
password VARCHAR (512) NOT NULL,
nombre VARCHAR (50),
apellido VARCHAR (50),
emailadd VARCHAR (255) NOT NULL UNIQUE,
ciudad VARCHAR (50),
localidad VARCHAR (50),
barrio VARCHAR(50),
rol ENUM ('medicoVet','dueñoMascota','admin','dueñoClinica') NOT NULL,
PRIMARY KEY(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*--------------------------------------------------------------------------------------------*/

CREATE TABLE IF NOT EXISTS centro_veterinario (
id INT AUTO_INCREMENT,
dueño_id INT,
nombre VARCHAR (50) NOT NULL UNIQUE,
direccion VARCHAR (300),
ciudad VARCHAR (50),
localidad VARCHAR (50),
barrio VARCHAR (50),
horaI time(4),
horaF time(4),
tipo ENUM ('consultorio','clinica','hospital') NOT NULL,
PRIMARY KEY (id),
FOREIGN KEY (dueño_id) REFERENCES usuario(id)
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
  nonbre VARCHAR(50)
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
  mascota_id INT NOT NULL,
  medicoVet_id INT NOT NULL,
  calificacion INT,
  costo FLOAT,
  FOREIGN KEY (mascota_id) REFERENCES mascota(id),
  FOREIGN KEY (medicoVet_id) REFERENCES usuario(id),
  UNIQUE (mascota_id, medicoVet_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*--------------------------------------------------------------------------------------------*/

CREATE TABLE IF NOT EXISTS detalle_caso (
  id INT AUTO_INCREMENT,
  PRIMARY KEY(id),
  info VARCHAR(500)
  id_caso INT NOT NULL,
  FOREIGN KEY (id_caso) REFERENCES caso(id), 
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*--------------------------------------------------------------------------------------------*/
