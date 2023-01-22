/*
10. Visulaizar los apellidos de los vendedores, su fecha y su numero de grupo,
ordenado por fecha descendente, mostrar los 4 ultimos.

FUNCIONES UTILIZADAS:
SELECT = Se usa para especificar los nombres de los campos que contienen
         los datos que quiere usar en una consulta.
FROM = Nos indica la columna o tabla que se usara el select para validar la informacio
ORDER BY =ordena los registros resultantes de una consulta por un campo o campos
          especificados en orden ascendente o descendente
DES = Espesifica que desea que los datos sean devultos  de forma desendente.
LIMIT = Se utiliza para restringir los registros que se retornan en una consulta.
*/

SELECT apellidos, fecha, id FROM vendedores ORDER BY fecha DESC LIMIT 4;