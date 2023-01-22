/*
11. Visualizar todos los cargos y el numero de vendedores que hay en cada cargo

FUNCIONES UTILIZADAS:
SELECT = Se usa para especificar los nombres de los campos que contienen
         los datos que quiere usar en una consulta.
COUNT = Devuelve el numero de filas o valores de un conjunto de filas
FROM = Nos indica la columna o tabla que se usara el select para validar la informacion
GROUP BY = se utiliza para juntar filas de resultados que coincidan en el valor de alguna 
           columna seleccionada

*/

SELECT cargo, COUNT(id) FROM vendedores GROUP BY cargo;