/*
15. Mostarr los clientes que mas encargos han hecho y mostarr cuantos hicieron.

FUNCIONES MAS UTILIZADAS:

SELECT = Se usa para especificar los nombres de los campos que contienen
          los datos que quiere usar en una consulta.
COUNT  = Devuelve el numero de registros.
FROM   = Nos indica la columna o tabla que se usara el select para validar la informacion.
INNER JOIN =  Combina los registros de los datos de las tablas si hay valores coincidentes
             en un campo en comun.
ON =  se utiliza al relacionar o comparar con otra tabla y nos muester eso valores
GROUP BY  = Se utiliza para juntar filas de resultados que coincidan en el valor de alguna 
           columna seleccionada.
OORDER BY = Ordena los registros resultantes de una consulta por un campo o campos
          especificados en orden ascendente o descendente
DESC =  Espesifica que desea que los datos sean devultos  de forma desendente.
LIMIT = Se utiliza para restringir los registros que se retornan en una consulta.
*/

SELECT c.nombre, COUNT(e.id) FROM encargos e
INNER JOIN clientes c ON c.id = e.cliente_id
GROUP BY cliente_id ORDER BY 2 DESC LIMIT 2; 