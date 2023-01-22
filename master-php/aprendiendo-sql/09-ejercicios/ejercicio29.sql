/*
29. Crear una vista de vendedores A que incluira todos los vendedores
    del grupo se llama "Vendedores A"

    FUNCIONES UTILIZADAS:
    CREATE = Es una funcion que nos permite creat tablas, datos, dentro del base de datos
    VIEW = nos permiete crear una vsita virtual de una tabala
    WHERE = condconal (cuando )
    IN = Permite evaluar si una exprecion esta dentro de otra 
    SELCT = Espesificar los nombres de los datos que se desea en una consulta
    FROM = Espesifica la tabala o consulta que contiene los datos que se usaran por el select 


*/

CREATE VIEW vendedoresA AS
SELECT * FROM vendedores WHERE grupo_id IN 
  (SELECT id FROM grupos WHERE nombre="VendedoresA");