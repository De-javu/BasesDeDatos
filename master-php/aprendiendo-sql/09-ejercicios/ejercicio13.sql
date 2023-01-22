/*
13.Sacar la media de los sueldos entre todos los vendedores por grupo.

FUNCIONES UTILIZADAS:

SELECT = Se usa para especificar los nombres de los campos que contienen
         los datos que quiere usar en una consulta.
AVG = Calcula la media aritmetica de un conjunto de valores contenidos en un canmpo
      espesifico en una consulta.
FROM = Nos indica la columna o tabla que se usara el select para validar la informacion.
GROUP BY = se utiliza para juntar filas de resultados que coincidan en el valor de alguna 
           columna seleccionada.
CEIL = Se utiliza para redondear un numero hacia arriba hasta el proximo entero.
INNER JOIN = Combina los registros de los datos de las tablas si hay valores coincidentes
             en un campo en comun.
*/


# forma uno 
SELECT AVG(sueldo) FROM vendedores;

# Forma dos 
SELECT AVG(sueldo), grupo_id FROM vendedores GROUP BY grupo_id;

# forma 3
SELECT CEIL(AVG(v.sueldo)) AS'MEDIA SALARIAL', g.nombre, g.ciudad FROM vendedores v 
INNER JOIN grupos g ON g.id = v.grupo_id
GROUP BY grupo_id;






