/*
25.Obtener una lista de los nombres de los clientes con el importe
de sus encargos acomulado
FUNCIONES UTILIZADAS:

SELECT = Se usa para especificar los nombres de los campos que contienen
         los datos que quiere usar en una consulta.
SUM = Devulve la suma de un cnjunro de valores contenidos en un camnpo espesifico
FROM = Nos indica la columna o tabla que se usara el select para validar la informacio 
INNER JOIN = Combina los registros de los datos de las tablas si hay valores coincidentes
             en un campo en comun.
ON = se utiliza al relacionar o comparar con otra tabla y nos muester eso valores
GROUP BY  = Se utiliza para juntar filas de resultados que coincidan en el valor de alguna 
           columna seleccionada.
OORDER BY = Ordena los registros resultantes de una consulta por un campo o campos
          especificados en orden ascendente o descendente
DESC = Espesifica que desea que los datos aparzcan de forma asendente.
*/
SELECT ci.nombre, SUM(precio*cantidad) AS"IMPORTE"
FROM clientes ci
INNER JOIN encargos en ON ci.id = en.cliente_id
INNER JOIN coches co ON en.coche_id = co.id
GROUP BY ci.nombre
ORDER BY 2 ASC;
