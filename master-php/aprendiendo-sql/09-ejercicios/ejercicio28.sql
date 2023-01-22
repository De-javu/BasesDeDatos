/*
28. Mostra todos los vendedores y el numero de clientes.
    se debe mostar tenga o no se tenga clientes.

FUNCIONES UTILIZADAS:

 SELECT = Se usa para especificar los nombres de los campos que contienen
         los datos que quiere usar en una consulta.
 COUNT = Permite calcular el numero de registros de una consulta.
 FROM = Nos indica la columna o tabla que se usara el select para validar la informacio 
 LEFT JOIN = Nos moastrara todas las filas incluidas las filas de la izquierda.
 GROUP BY = Se utiliza para juntar filas de resultados que coincidan en el valor de alguna 
            columna seleccionada.

*/

SELECT v.nombre, v.apellidos, COUNT(c.id)
FROM vendedores v
LEFT JOIN clientes c ON c.vendedor_id = v.id
GROUP BY v.id;
