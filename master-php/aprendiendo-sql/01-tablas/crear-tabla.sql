/*

FUNCIONES QUE SE USAN :

CREATE DATABASE (NOMBRE DE LA BASE ) = Se utiliza para crear unja base de datos.
CREATE TABLE   = Se utiliza para crear una nueva tabla de datos.
CONSTRAINT  = Se utiliza para restriccion de alguana variables o tablas 
PRIMARY KEY = ES una columna o grupo de columna que identifica de forma ezclusiva cada fila.


*****************************COMO CREAR UN TABLA.******************************************
Tenemos los diferentes tipos de clasificacion de datos:
int (n # cifras)                   ENTERO 
integer (n# caracteres)            ENTERO   (maximo 4294967295)
varchar (n# caracteres)            STRING / ALFANUMERICO (maximo 255)
char (n# caracteres)               STRING / ALFANUMERICO
float (n# cifras, n# decimales)    DECIMAL / COMA FLOTANTE
date , time, timestamp



//***************************ESTRING MAS GRANDES.***************************************  
TEXT 65535 caracteres
MEDIUMTEXT 16 millones
LONGTEXT 4 billones de caracteres

********************************ENTEROS MAS GRANDES**************************************
MEDIUMINT
BIGINT

**********************CREAR LA TABLA EJEMPLO/*/
CREATE TABLE usuarios(
id                   int(11) auto_increment not null,
nombre               varchar(100) not null,
apellidos            varchar(255) default 'hola que tal',
email                varchar(100) not null,
password             varchar(255),
CONSTRAINT pk_usuarios PRIMARY KEY(id)
);
