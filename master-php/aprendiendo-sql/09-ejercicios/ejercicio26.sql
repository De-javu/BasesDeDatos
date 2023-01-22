/*
26. Sacar los vendedorees que tienen jefe y sacar el nombre del jefe

FUNCIONES UTILIZADAS:

SELECT = Se usa para especificar los nombres de los campos que contienen
         los datos que quiere usar en una consulta.
CONTAC = Permite tomar valores de varias de varias columna para unir cadenas de texto 
AS =  Se utiliza para renombrar con un alias
FROM = Nos indica la columna o tabla que se usara el select para validar la informacio
INNER JOIN  = Combina los registros de los datos de las tablas si hay valores coincidentes
             en un campo en comun.
ON  =   se utiliza al relacionar o comparar con otra tabla y nos muester eso valores

*/

SELECT CONCAT(v1.nombre,' ', v1.apellidos) AS'VENDEDOR', CONCAT(v2.nombre,' ', v2.apellidos) AS'jefe'
FROM vendedores v1
INNER JOIN vendedores v2 ON v1.jefe = v2.id;