/*
20. Seleccionar el nombre en el que trabaja el vendedor con mayor
salario y mostarr el nombre del grupo.

FUNCIONES UTILIZADAS:

SELECT = Se usa para especificar los nombres de los campos que contienen
         los datos que quiere usar en una consulta.
FROM =   Nos indica la columna o tabla que se usara el select para validar la informacio
WHERE =  Cuando (Es un condicional
IN =   Permite evaluar unlistado de valores dentro de una subconsulta
MAX =  Retorna el mayor valor para una columna determinada.

*/

SELECT * FROM grupos WHERE id IN
(SELECT grupo_id FROM vendedores WHERE sueldo = (
    SELECT MAX(sueldo) FROM vendedores
));