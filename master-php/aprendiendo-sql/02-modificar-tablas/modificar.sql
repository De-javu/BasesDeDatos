# PARA RENOMBRAR UNA TABLA UTILIZAMOS EL SIGUIENTE COMANDO # 
ALTER TABLE usuarios RENAME TO usuarios_renom; 

# CAMABIAR NOMBRE DE UNA COLUMNA#

ALTER TABLE usuarios_renom CHANGE apellidos apellido varchar(100) null;

# MODIFICAR COLUMNA SIN CAMBIAR SU NOMBRE #
ALTER TABLE usuarios_renom MODIFY apellido char(40) not null;

####################################################################################
# AÑADIR COLUMNA #
ALTER TABLE usuarios_renom ADD website varchar(100) null;

# AÑADIR RESTRICCIONA COLUMNA #
ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE(email);

# BORRA UNA COLUMNA #
ALTER TABLE usuarios_renom DROP website;