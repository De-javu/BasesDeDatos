/*
9. Mostrar todos los vendedores del grupo 2, ordenados por salario de mayor a menor

FUNCIONES UTILIZADAS:
SELECT = se usa para especificar los nombres de los campos que contienen
         los datos que quiere usar en una consulta.
FROM  = Nos indica la columna o tabla que se usara el select para validar la informacio
WHERE = Cuando (Es un condicional)
ORDE BY = ordena los registros resultantes de una consulta por un campo o campos
          especificados en orden ascendente o descendente
DESC = Espesifica que desea que los datos aparzcan de forma desendente.
*/

SELECT * FROM vendedores WHERE grupo_id=2  ORDER BY sueldo DESC;
