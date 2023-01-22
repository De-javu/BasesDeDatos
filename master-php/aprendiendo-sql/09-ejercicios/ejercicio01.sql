/*
************************************CONSECTOS**************************************


FUNCIONES QUE SE USAN :

CREATE DATABASE (NOMBRE DE LA BASE ) = Se utiliza para crear unja base de datos.

CREATE TABLE   = Se utiliza para crear una nueva tabla de datos.

CONSTRAINT  = Se utiliza para restriccion de alguana variables o tablas 

PRIMARY KEY = ES una columna o grupo de columna que identifica de forma ezclusiva cada fila.

FOREIGN KEY = funciona como un elemento que se encarga de relacionar dos tablas. la FOREIGN KEY  trabaja enlazada 
con la primary key de otra taabla de una misma base de datos relacional.

REFERENCES = contiene la informacion de un campo o un mensaje.

ENGINE = Es el motor de almecenamiento usado para esta tabla.

InnoDB = Es un motor de almacenamiento para MYSQL especialmente adecuado para grandes bases d datos,
especialmente cuando muchs datos estan entrelzados.

INSERT INTO = Seleccion alas filas definidas por una consulta y las inserta en un a nueva tabla 

VALUES = Combinacion de uno o varios valores y valores de sql , quie brindan un resultado, o permite realizar 
un conjunto de resultados

CURDATE =  fecha actual.
************************************************************************************
Diseñar y crear la base de datos de un cocesionario.
*/

CREATE DATABASE IF NOT EXISTS concesionario;
USE concesionario;

CREATE  TABLE   coches(
id           int(10) auto_increment not null,
modelo       varchar(100) not null,
marca        varchar(50),
precio       int(20) not null,
stock        int (255) not null,
CONSTRAINT pk_coches PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE grupos(
id           int(10) auto_increment not null,
nombre       varchar(100) not null,
ciudad       varchar(100),
CONSTRAINT pk_grupos PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE vendedores(
id           int(10) auto_increment not null,
grupo_id     int(10) not null,
jefe         int(10),
nombre       varchar(100) not null,
apellidos    varchar(150),
cargo        varchar(50),
fecha        date,
sueldo       float(20,2),
comision     float(10,2),
CONSTRAINT pk_vendedores PRIMARY KEY(id),
CONSTRAINT fk_vendedor_grupo FOREIGN KEY(grupo_id) REFERENCES grupos(id),
CONSTRAINT fk_vendedor_jefe FOREIGN KEY(jefe) REFERENCES vendedores(id)
)ENGINE=InnoDB;


CREATE TABLE clientes (
id            int(10) auto_increment not null,
vendedor_id   int(10),
nombre        varchar(150) not null,
ciudad        varchar(100),
gastado       float(50,2),
fecha         date,
CONSTRAINT pk_clientes PRIMARY KEY(id),
CONSTRAINT fk_cliente_vendedor FOREIGN KEY(vendedor_id) REFERENCES  vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE encargos(
id            int(10) auto_increment not null,
cliente_id    int(10) not null,
coche_id      int(10) not null,
cantidad      int(100),
fecha         date,
CONSTRAINT pk_encargos PRIMARY KEY(id),
CONSTRAINT fk_encargo_cliente FOREIGN KEY(cliente_id) REFERENCES clientes(id),
CONSTRAINT fk_encargo_coche FOREIGN KEY(coche_id) REFERENCES coches(id)
)ENGINE=InnoDB;


# RELLENAR LA BASE DE DATOS CON INFORMACION - INSERTS #

#COCHES
INSERT INTO coches VALUES(NULL, 'Renault Stepway', 'Renault', 14000, 13);
INSERT INTO coches VALUES(NULL, 'Mazda 323', 'Mazda', 19000, 10);
INSERT INTO coches VALUES(NULL, 'Toyota', 'Hilux', 3000, 24);
INSERT INTO coches VALUES(NULL, 'Ford Ranger', 'Ford', 28000, 5);
INSERT INTO coches VALUES(NULL, 'BMW blu', 'BMW', 100000, 2);
INSERT INTO coches VALUES(NULL, 'Ferrari spider ', 'Ferrari', 24500, 50);

#GRUPOS
INSERT INTO grupos VALUES(NULL, 'Vendedores A', 'Bogota');
INSERT INTO grupos VALUES(NULL, 'Vendedores B', 'Bogota');
INSERT INTO grupos VALUES(NULL, 'Directores mecanicos ', 'Cali');
INSERT INTO grupos VALUES(NULL, 'Vebdedores A', 'Medellin');
INSERT INTO grupos VALUES(NULL, 'Vendedores B', 'Medellin');
INSERT INTO grupos VALUES(NULL, 'Vendedores c', 'Barranquilla');

#VENDEDORES
INSERT INTO vendedores VALUES(NULL,1, NULL, 'Andres', 'Pardo', 'jefe de area', CURDATE(), 7392, 8);
INSERT INTO vendedores VALUES(NULL,1, 1, 'James', 'Holguin', 'Ayudante de tienda', CURDATE(), 2300, 1);
INSERT INTO vendedores VALUES(NULL,2, NULL, 'Ulices', 'Torres', 'Responsable de tienda', CURDATE(), 3800, 5);
INSERT INTO vendedores VALUES(NULL,2, 3, 'Nelson', 'perez', 'ayudante de tienda', CURDATE(), 12000, 5);
INSERT INTO vendedores VALUES(NULL,3, NULL, 'Camilo', 'Leal', 'Mecanico jefe', CURDATE(), 5000, 6);
INSERT INTO vendedores VALUES(NULL,4, NULL, 'Angie', 'Parra', 'Vendedor recambio', CURDATE(), 1300, 3);
INSERT INTO vendedores VALUES(NULL,5, NULL, 'yuliana', 'Mendoza', 'Vendedor experto', CURDATE(), 6000, 2);
INSERT INTO vendedores VALUES(NULL,6, NULL, 'Yordy', 'Moreno', 'Ejecutivo de cuentas', CURDATE(), 8000, 8);
INSERT INTO vendedores VALUES(NULL,6, 8, 'Diego', 'MOreno', 'ayudante de tienda', CURDATE(), 10000, 10);

#CLIENTES
INSERT INTO clientes VALUES(NULL, 1, 'IMAGE SCAN', 'Bogota', 6000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Alma archivos', 'Medellin', 76000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Coca cola', 'Cali', 13000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Panaderia el trigal', 'Bogota', 112000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Sex-imperial','Barranquilla', 100000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'RPM ', 'Medellin', 24500, CURDATE());



#ENCARGOS
INSERT INTO encargos VALUES(NULL, 1, 3, 2, CURDATE());
INSERT INTO encargos VALUES(NULL, 2, 2, 4, CURDATE());
INSERT INTO encargos VALUES(NULL, 3, 1, 1, CURDATE());
INSERT INTO encargos VALUES(NULL, 4, 4, 3, CURDATE());
INSERT INTO encargos VALUES(NULL, 5, 5, 1, CURDATE());
INSERT INTO encargos VALUES(NULL, 6, 6, 1, CURDATE());
