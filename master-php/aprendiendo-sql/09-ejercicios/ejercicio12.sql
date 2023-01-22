/*
12. Conseguir la masa salarial del concesionario (anual)

SELECT = Se usa para especificar los nombres de los campos que contienen
         los datos que quiere usar en una consulta.
SUM = Permiete obtener la suma total de los valores de una columna de tipo numerico. 
AS =  un alias , se utliza para renombrar una columna o tabla.
FROM  nos indica la columna o tabla que se usara el select para validar la informacio.

*/

SELECT SUM(sueldo) AS'Masa Salarial' FROM vendedores;
