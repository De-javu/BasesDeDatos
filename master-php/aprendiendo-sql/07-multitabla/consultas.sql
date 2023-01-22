/*
CONSULTA MULTITABLA:
Son consultas que sirven para consultar varias tablas en una sola sentencia
FUNCIONES UTILIZADAS:
INNER JOIN=  Saca unicamente los datos de la tabla que se piden ,pero el
ON permiete solo mostrar los datos que quremos ver de esa tabla lo sque considan
LEFT jOIN= Permiete matener toda los datos de la tabla que estan a las IZQUIERDA
            de antes de escribir e left join , como esta enel ejemplo
RINGHT JOIN = Permiete mantener todas los datos de la tabla que este a la DERECHA
              despues de escrito el ringht join, como esta en el ejemplo
*/

#Mostrar las entradas con el nombre de autor y el nombre de la categoeria#
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoeria'
FROM entradas e, usuarios u, categorias c
WHERE e.usuario_id = u.id AND e.categoria_id = c.id;
/********************INNER JOIN******************************************/
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'categoria'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;


# MOSTRAR EL NOMBRE DE LAS CATEGORIAS Y AL LADO CAUNTAS ENTRADAS TIENE#
SELECT c.nombre, COUNT(e.id) FROM categorias c, entradas e
WHERE e.categoria_id = c.id GROUP BY e.categoria_id;

/********************LEFT JOIN******************************************/
SELECT c.nombre, COUNT(e.id) FROM categorias c
LEFT JOIN entradas e ON e.categoria_id = c.id
GROUP BY e.categoria_id;

/********************RINGTH JOIN******************************************/

SELECT c.nombre, COUNT(e.id) FROM entradas e
RIGHT JOIN categorias c ON e.categoria_id = c.id
GROUP BY e.categoria_id;

# MOSTRAR EL EMAIL DE LOS USUARIOS Y AL LADO CUANTAS ENTRADAS TIENEN #
SELECT u.email, COUNT(titulo) FROM usuarios u, entradas e
WHERE e.usuario_id = u.id GROUP By e.usuario_id;


