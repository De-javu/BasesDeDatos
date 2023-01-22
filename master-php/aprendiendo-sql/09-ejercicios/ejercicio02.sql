/*
Modificar la comision de los vendedores y ponerla al 0.5% cuando ganan mas de 8000

UPDATE = ACTUALIZAR
SET    = SETEO DEL VALOR QUE SE DESEA 
WHERE  = CUANDO (ES UN CONDICIONAL)
*/

UPDATE vendedores SET comision=0.5 WHERE sueldo >= 8000;
UPDATE vendedores SET comision=2.5 WHERE sueldo <= 6000;

UPDATE vendedores SET sueldo=15500 WHERE sueldo = 7392;

UPDATE vendedores SET sueldo=5500 WHERE id=2;
