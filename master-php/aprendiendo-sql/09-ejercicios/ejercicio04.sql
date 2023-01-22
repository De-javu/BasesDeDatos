/*
Mostar los vendedores que se registraron posterior a la fecha 

SELECT * = Seleccion del campo que contienen los datos 
FROM   = Espesifica la tabla que contiene los datos a selecionar
WHERE  = Cuando (Es un condicional)
UPDATE = Actualizar
SET = SETEO O SELCCION DEL VALOR QUE SE VA A MODIFICAR.

*/


SELECT * FROM vendedores  WHERE fecha >= '2023-01-07';

UPDATE vendedores SET fecha='2020-12-24' WHERE id=8;

