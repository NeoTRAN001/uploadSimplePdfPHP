# uploadSimplePdfPHP

# DB
- Crear una Base de datos llamada image
- Insertar el siguiente consulta para crear la tabla:
```
CREATE TABLE archivos (
  id int(10) unsigned NOT NULL auto_increment,
  archivo_binario blob NOT NULL,
  archivo_nombre varchar(255) NOT NULL default '',
  archivo_peso varchar(15) NOT NULL default '',
  archivo_tipo varchar(25) NOT NULL default '',
  PRIMARY KEY  (id)
);
```
