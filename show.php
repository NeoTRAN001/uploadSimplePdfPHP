<?php
if(isset($_GET['id'])) {

    // you may have to modify login information for your database server:
    $Host = 'localhost';
    $Username = 'root';
    $Password = '';
    $dbName = 'image';
        
    $conexion = new mysqli($Host, $Username, $Password, $dbName);
        
    if($conexion->connect_error) {
        die("Connection failed: " . $conexion->connect_error);
    }

    $sql = "SELECT archivo_nombre,archivo_binario,archivo_tipo,archivo_peso FROM archivos WHERE id='".$_GET['id']."'";

    $consulta =  $conexion->query($sql);

    $datosPdf = $consulta->fetch_assoc();

    echo "<br> Nombre archivo: ".$datosPdf['archivo_nombre'];
    echo "<br> Tipo archivo (MIME formato): ".$datosPdf['archivo_tipo'];
    echo "<br> Peso: ".$datosPdf['archivo_peso']." bytes.<br><br>";
}
?>