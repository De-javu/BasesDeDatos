/*
Mostrar todos los vendedores con su nombre y el numero de dias que llevan
en el consecionario.

FUNCIONES:
SELECT = Seleccion del campo que contienen los datos
DATEDIFF = se usa para determinar diferencias entre dos fechas;
CURDATE =  Trae la fecha actual
AS =    una alias , se utliza para renombrar una columna o tabla 
FROM = nos indica la columna o tabla que se usara el select para validar la informacio
*/

SELECT nombre, DATEDIFF(CURDATE(), fecha) AS' Dias Trabajados' FROM vendedores;
