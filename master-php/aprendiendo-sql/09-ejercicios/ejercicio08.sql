/*
8. Visualizar todos los coches en cuya narca existan la letra "A" 
y cuyo modelo empiece por "F"

FUNCIONES UTILIZADAS:

SELECT = SElecion del campo que contiene los datos
FROM = Nos indica la columna o tabla que se usara el select para validar la informacio
WHERE = Cuando (Es un condicional)
LIKE = Se utiliza para buscar un patron espesifico en una columna 
AND = Muestra un registro cuanso la primera condicion y la segunda se cumple.
%_%  = se utiliza para bsucar un caracter quecontenga e alguba parte
_% = se utiliza para buscar el caracter antes de otros
*/

SELECT * FROM coches WHERE marca  LIKE '%a%'  AND modelo LIKE 'F%';