<?php
if (empty($_FILES['archivo']['name'])){
    header("location: index.php?proceso=falta_indicar_fichero"); //o como se llame el formulario ..
exit;
}

//Credenciales Mysql
$Host = 'localhost';
$Username = 'root';
$Password = '';
$dbName = 'image';

$conexion = new mysqli($Host, $Username, $Password, $dbName);

if($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}

$binario_nombre_temporal=$_FILES['archivo']['tmp_name'] ;
$binario_contenido = addslashes(fread(fopen($binario_nombre_temporal, "rb"), filesize($binario_nombre_temporal)));
$binario_nombre=$_FILES['archivo']['name'];
$binario_peso=$_FILES['archivo']['size'];
$binario_tipo=$_FILES['archivo']['type'];

//insertamos los datos en la BD.
$insertar = $conexion->query("INSERT into archivos (id, archivo_binario, archivo_nombre, archivo_peso, archivo_tipo) VALUES ('1', '$binario_contenido', '$binario_nombre', '$binario_peso', '$binario_tipo')");

if($insertar) {
    echo "Archivo Subido Correctamente.";
    header("location: show.php?id=1"); 
} else {
    echo "Ha fallado la subida, reintente nuevamente.";
}

exit;
?>