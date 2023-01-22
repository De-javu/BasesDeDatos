/*
16. Obtener listado de clientes atendidos por el vendedor 'David lopez'

FUNCIONES UTILIZADAS:

SELECT = Se usa para especificar los nombres de los campos que contienen
         los datos que quiere usar en una consulta.
FROM =  Nos indica la columna o tabla que se usara el select para validar la informacio
WHERE =  Cuando (Es un condicional)
IN  =  filtra un conjunto de resultados demntro de una lista.
AND = Muestra un registro cuanso la primera condicion y la segunda se cumple.


*/

SELECT * FROM clientes WHERE vendedor_id IN
(SELECT id FROM vendedores WHERE nombre = 'Andres' AND apellidos = 'Pardo');
