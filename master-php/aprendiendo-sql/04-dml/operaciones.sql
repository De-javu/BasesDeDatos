# OPERACIONES ARITMETICAS #
SELECT email, (7*7) as 'OPERACION' FROM usuarios; 


#PARA ORDENAR #
SELECT id, email, (7*7) as 'OPERACION' FROM usuarios ORDER BY id;

# OPERACIONES MATEMATICAS # 
SELECT FLOOR(7.34) AS 'OPERACION' FROM usuarios;

SELECT pi() AS 'OPERACION' FROM usuarios;

SELECT FLOOR(7.34) AS 'OPERACION' FROM usuarios;

SELECT RAND() AS 'OPERACION' FROM usuarios;

SELECT ROUND(7.91) AS 'OPERACION' FROM usuarios;

SELECT SQRT(7.91) AS 'OPERACION' FROM usuarios;

SELECT TRUNCATE(7.91.1) AS 'OPERACION' FROM usuarios;
