<?php
// Conexion a la base de datos
 include "conexion.php";
$imagen_id = $_GET['id'];
if ($_GET['id'] > 0)
{
    // Consulta de búsqueda de la imagen.
    $consulta = "SELECT * FROM salon WHERE idcapilla= $imagen_id";
    $resultado = @mysql_query($consulta) or die(mysql_error());
    $datos = mysql_fetch_assoc($resultado);
     $numero = $datos['idcapilla'];
if ($imagen_id == $numero) {
 $imagen = $datos['capilla']; // Datos binarios de la imagen.
    $tipo = $datos['tipo'];  // Mime Type de la imagen.
    // Mandamos las cabeceras al navegador indicando el tipo de datos que vamos a enviar.
    header("Content-type: $tipo");
    // A continuación enviamos el contenido binario de la imagen.
    echo $imagen;
}
    
}
?>