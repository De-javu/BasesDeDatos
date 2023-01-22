/*
17. Obtener listado con los encargos realizados por el cliente 'Fruteria Antonia INC'

FUNCIONES UTILIZADAS:

SELECT = Se usa para especificar los nombres de los campos que contienen
         los datos que quiere usar en una consulta.
FROM = Nos indica la columna o tabla que se usara el select para validar la informacio
INNER JOIN =Combina los registros de los datos de las tablas si hay valores coincidentes
             en un campo en comun.
ON = se utiliza al relacionar o comparar con otra tabla y nos muester eso valores
WHERE =  Cuando (Es un condicional)

*/

SELECT e.id AS'N° ENCARGO', cantidad, c.nombre, co.modelo, e.fecha
FROM encargos e
INNER JOIN clientes c ON c.id = e.cliente_id
INNER JOIN coches co ON co.id = e.coche_id
WHERE e.cliente_id IN
(SELECT id FROM clientes WHERE nombre = 'coca cola');