/*
21. Obtener los nombres y ciudades de los clientes con encargo de 3 unidades adelante

FUNCIONES UTILIZADAS:

SELECT = Se usa para especificar los nombres de los campos que contienen
         los datos que quiere usar en una consulta.
FROM =   Nos indica la columna o tabla que se usara el select para validar la informacio
WHERE =  Cuando (Es un condicional
IN =   Permite evaluar unlistado de valores dentro de una subconsulta

*/

SELECT nombre,  ciudad  FROM clientes WHERE id IN
(SELECT cliente_id FROM encargos WHERE cantidad >=3);