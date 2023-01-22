# CONSULTAS DE AGRUPAMOENTO #
SELECT COUNT(titulo)AS 'NUMERO DE ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id;

# CONSULTAS DE AGRUPAMIENTO CON CONDICION #
SELECT COUNT(titulo)AS 'NUMERO DE ENTRADAS', categoria_id
FROM entradas GROUP BY categoria_id having COUNT(titulo) >= 4;


/*
FUNCIONES DE AGRUPAMIENTO
AVG..........sacar la media
COUNT........Contar el numero de elementos
MAX..........Valor maximo de grupo
MIN..........Valor minimo del grupo
SUM..........Sumar todo el contenido del grupo

*/

SELECT AVG(id)AS 'Media de entradas' FROM entradas;
SELECT MAX(id)AS 'Maximo id', titulo FROM entradas;
SELECT MIN(id)AS 'Maximo id', titulo FROM entradas;
SELECT SUM(id)AS 'Suma de  id', titulo FROM entradas;
