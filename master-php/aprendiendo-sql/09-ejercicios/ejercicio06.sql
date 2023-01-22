/*
Visualizar el nombre y los apellidos de ls vendedores en una misma columna,
su fecha de registro y el dia de la semana en la que se registraron.

FUNCIONE UTILIZADAS:

SELECT = SElecion del campo que contiene los datos
CONCAT =  Toma un numero de variables y los concatena o combina en una  sola cadena 
          se necesita minimo dos valores.
AS =  un alias , se utliza para renombrar una columna o tabla.
DAYNAME = Nos regresa los caraacteres que contiene el dia.
FROM  = nos indica la columna o tabla que se usara el select para validar la informacio
*/

SELECT CONCAT(nombre, '', apellidos) AS'nombre y apellidos',
       fecha, DAYNAME(fecha) FROM vendedores;