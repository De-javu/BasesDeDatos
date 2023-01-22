/*
22. Mostarr listado de clientes (numero de cliente y el nombre)
mostrar tambien el numero de venddor y su nombre.

FUNCIONES UTILIZADAS:

SELECT = Se usa para especificar los nombres de los campos que contienen
         los datos que quiere usar en una consulta.
CONCAT = Permiete concatenar distintos tipos de valores
AS =  Se utiliza para renombrar con un alias
FROM    = Nos indica la columna o tabla que se usara el select para validar la informacio
WHERE = Cuando (Es un condicional
*/

SELECT c.id, c.nombre, v.id, CONCAT(v.nombre,' ', v.apellidos) AS'VENDEDOR'
FROM clientes c, vendedores v
WHERE c.vendedor_id = v.id;