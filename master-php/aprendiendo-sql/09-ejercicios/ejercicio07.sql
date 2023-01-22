/*
7. Mostrar el nombre y el salario de los vendedores con cargo de 'ayudante de tienda'

FUNCIONES UTILIZADAS:
SELECT = SElecion del campo que contiene los datos
FROM = Nos indica la columna o tabla que se usara el select para validar la informacio
WHERE = Cuando (Es un condicional)
*/

SELECT nombre, sueldo from vendedores WHERE cargo ='Ayudante de tienda';
