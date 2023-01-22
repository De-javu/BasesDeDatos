/*
OPERADORES LOGICOS
O               OR
Y               AND
NO              NOT


COMODINES:
1. Cualquier cantidad de caracteres: %
2. Un caracter desconocido: _
*/

# EJEMPLO:
# 3. Mostrar el email de los usuarios cuyo apellido ontenga la letra A
SELECT email FROM usuarios WHERE apellidos LIKE '%a%' AND password = 123;

# 4. Sacar los registros de l atabla usuarioscuyo año sea par
SELECT * FROM usuarios WHERE (YEAR(fecha)%2 = 0);

# 5. Sacra todos los registros de la tabla usuarios cuyo nombre tenga mas de 5 letras 
# y que ademas se hayan registrado antes del, 2022, y mostrar el nombre en mayuscula 

SELECT UPPER(nombre) AS 'Nombre', apellidos FROM usuarios WHERE LENGTH(nombre) > 5 AND YEAR(fecha) = 2022;