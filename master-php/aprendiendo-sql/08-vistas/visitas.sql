/*
VISITAS:
Las podemos definir  como una consta almacenada en la base de datos que 
se utilizan como una tabla.
no almacenan datos si no que utiliza asociaciones y los datos originales
de las tablas , de forma que siempre se mantiene actualizada.
*/

CREATE VIEW entradas_con_nombre AS
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoeria'
FROM entradas e, usuarios u, categorias c
WHERE e.usuario_id = u.id AND e.categoria_id = c.id;