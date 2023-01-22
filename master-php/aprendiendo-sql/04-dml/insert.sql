# INSERTAR NUEVO REGISTRO #
INSERT INTO usuarios VALUES(null, 'Andres', 'Pardo', 'andres@and.com', '123', '2022-12-06'); 
INSERT INTO usuarios VALUES(null, 'Yordy', 'Moreno', 'yordy@and.com', '123', '2022-12-06'); 
INSERT INTO usuarios VALUES(null, 'THomas', 'Moreno', 'Thomas@and.com', '123', '2022-12-06'); 
INSERT INTO usuarios VALUES(null, 'Martha', 'Moreno', 'martha@and.com', '123', '2022-12-06'); 
INSERT INTO usuarios VALUES(null, 'Bruno', 'dias', 'bruno@and.com', '123', '2022-12-06'); 


# INSERT FILAS SOLO CON CIERTAS COLUMNAS #
INSERT INTO usuarios(email,password) VALUES('admin@admin', 'admin');