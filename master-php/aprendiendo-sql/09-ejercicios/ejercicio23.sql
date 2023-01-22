/*
23. Listar todos los encargos realizaos con las marca del coche y el nombre
del clientes 

FUNCIONES UTILIZADAS:

SELECT = Se usa para especificar los nombres de los campos que contienen
         los datos que quiere usar en una consulta.
FROM = Nos indica la columna o tabla que se usara el select para validar la informacio 
INNER JOIN =  Combina los registros de los datos de las tablas si hay valores coincidentes
             en un campo en comun.
ON =  se utiliza al relacionar o comparar con otra tabla y nos muester eso valores
*/

SELECT e.id, co.marca, c.nombre FROM encargos e 
INNER JOIN  coches co ON co.id = e.coche_id 
INNER JOIN clientes c ON c.id = e.cliente_id;
