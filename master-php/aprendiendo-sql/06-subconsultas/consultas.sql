/*
SUBCONSULTA:
- Son colsultas que se ejecutan esnter otras.
- Consiste en utilizar los resultados de la subconsulta para operar en la consulta principal
- Jugando con las claves ajenas / foraneas.
*/

#SACAR USUSARIOS CON ENTRADAS#
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas);
#SE UTLIZA PARA CONSULTAS DENTRO DE OTRA CONSULTAS  QUE NO ESTAN EN ESA TABLA#
SELECT * FROM usuarios WHERE id NOT IN (SELECT usuarios_id FROM entradas);

#SACAR LOS USUARIOS QUE TENGAN ALGUNA ENTRADA QUE EN SU TITULO HABLE DE GTA#
SELECT nombre, apellidos FROM usuarios WHERE id 
      IN (SELECT usuario_id FROM entradas WHERE titulo LIKE "%fifa%");

/*
1. Sacar todas las entradas de la categoria accion utilizando su nombre
2. Mostrar las categorias con mas de 3 entradas
3. Mostarr los usiarios que entraron el martes
4. Mostrar el nombre de el usuario que tenga mas entradas
5. Mostrar las categorias sin entradas      
*/

#EJEMPLO # 1. Sacar todas las entradas de la categoria accion utilizando su nombre#

SELECT categoria_id, titulo FROM entradas WHERE categoria_id
      IN (SELECT id FROM categorias WHERE nombre = 'Deportes') >= 3;

#EJEMPLO # 2. Mostrar las categorias con mas de 3 entradas#

SELECT nombre FROM categorias WHERE 
id IN (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id) >=3);

#EJEMPLO # 3. Mostarr los usiarios que entraron el martes#

SELECT * FROM usuarios WHERE id IN 
(SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha) =3);

#EJEMPLO # 4. Mostrar el nombre de los usuarios que tengan mas entradas#
SELECT CONCAT(nombre, ' ',apellidos) AS'El usuario con mas entradas' FROM usuarios WHERE id =
(SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);

#EJEMPLO # 5. Mostrar las categorias de entradas#
SELECT * FROM categorias WHERE id 
        NOT IN (SELECT categoria_id FROM entradas);
