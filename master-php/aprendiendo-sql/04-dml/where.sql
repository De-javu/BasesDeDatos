# CONSULTA CON UNA CONDICION #
SELECT * FROM usuarios WHERE email = 'admin@admin';

/*
OPERADORES DE COMPARACION
Igual               =
Distinto            !=
Menos               <
Mayor               >
Menor o igual       <=
Mayor o igual       >=
Entre               between A and B
En                  in 
Es nulo             is null
No nulo             is not null
como                like
no es como          not like 

*/

# EJEMPLOS #
# 1. Mostrar nombre y apellidos de toodos los usuarios registrados en el 2022
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) = 2022;

# 2. Mostrar nombre y a pellidos de toodos los usuarios  que no se registraron en el 2022
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) != 2022;

