/*
14. Visualizar las unidades totales vendidas de cada cliente.
 mostarr el nombre del coche, numero de clientes y la suma de unidades.

 FUNCIONES UTILIZADAS:

 SELECT = Se usa para especificar los nombres de los campos que contienen
          los datos que quiere usar en una consulta.
 AS =  Un alias , se utliza para renombrar una columna o tabla.
 SUM = Permiete obtener la suma total de los valores de una columna de tipo numerico
 ON =  se utiliza al relacionar o comparar con otra tabla y nos muester eso valores
 FROM =  Nos indica la columna o tabla que se usara el select para validar la informacion.
 INNER JOIN = Combina los registros de los datos de las tablas si hay valores coincidentes
             en un campo en comun.
 GROUP BY = Se utiliza para juntar filas de resultados que coincidan en el valor de alguna 
           columna seleccionada.

*/

SELECT co.modelo AS'COCHE', cl.nombre AS'CLIENTE', SUM(e.cantidad) AS'UNIDADES'
FROM encargos e
INNER JOIN coches co ON co.id= e.coche_id
INNER JOIN clientes cl ON cl.id = e.cliente_id
GROUP BY e.coche_id, e.cliente_id;