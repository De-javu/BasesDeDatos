/*
27. Visualizar ls nombres de los clientes y la cantidad de encargos realizados,
incluyendo los que hayan realizado encargos.

FUNCIONE UTILIZADAS:

 INSERT INTO = Seleccion alas filas definidas por una consulta y las inserta en un a nueva tabla 
VALUES = Combinacion de uno o varios valores y valores de sql , que brindan un resultado, o permite realizar 
          un conjunto de resultados
 NULL = Se utiliza para identificar valores vacios dentro de una base de datos;
 CURDATE =  fecha actual.
 SELECT = Se usa para especificar los nombres de los campos que contienen
         los datos que quiere usar en una consulta.
 COUNT = Permite calcular el numero de registros de una consulta.
 FROM = Nos indica la columna o tabla que se usara el select para validar la informacio 
 LEFT JOIN = Nos moastrara todas las filas incluidas las filas de la izquierda.
 GROUP BY = Se utiliza para juntar filas de resultados que coincidan en el valor de alguna 
            columna seleccionada.
*/

INSERT INTO clientes VALUES(NULL, 5, 'Filtros Colombia', 'Medellin', 0, CURDATE());

SELECT c.nombre, COUNT(e.id) AS'CONTADOR'
FROM clientes c
LEFT JOIN encargos e ON c.id = e.cliente_id
GROUP BY 1;


