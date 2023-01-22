/*
19. Obtener los vendedores con 2 o mas clientes;
FUNCIONES UTILIZADAS;

SELECT = Se usa para especificar los nombres de los campos que contienen
         los datos que quiere usar en una consulta.
FROM =  Nos indica la columna o tabla que se usara el select para validar la informacio
WHERE  Cuando (Es un condicional)
IN =  Permite evaluar unlistado de valores dentro de una subconsulta
HAVING = Muestra cualquier registr agrupado presendido por el group by
COUNT = Permite contar 

*/

SELECT * FROM vendedores WHERE id IN
(SELECT vendedor_id FROM clientes GROUP BY vendedor_id HAVING COUNT(id)>=2);