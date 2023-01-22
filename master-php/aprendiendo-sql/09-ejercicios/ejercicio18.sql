/*
18. Listar los clientes que han hecho alguun encargo del coche "Toyota"

FUNCIONES UTILIZADAS:

SELECT = Se usa para especificar los nombres de los campos que contienen
         los datos que quiere usar en una consulta.
FROM = Nos indica la columna o tabla que se usara el select para validar la informacio
WHERE = Cuando (Es un condicional)
IN = Permite evaluar unlistado de valores desntro de una subconsulta
LIKE = Se utiliza para evaluar un patromde busqueda en la consulta que se desea.
*/

SELECT *FROM clientes WHERE id IN
(SELECT cliente_id FROM encargos WHERE coche_id
IN (SELECT id FROM coches WHERE modelo LIKE '%Ford Ranger%'));