# MODIFICAR FILAS / ACTUALIZAR DATOS#

/*con esta funcion actulizamos todo es todo, ojo toca tener mucho cuidado*/

UPDATE usuarios SET fecha=CURDATE();


/* Con esta funcion actulizamos controlada mente columna y fila que se desea*/
UPDATE usuarios SET fecha='2019-07-09', apellidos='DIAS' WHERE id=4;