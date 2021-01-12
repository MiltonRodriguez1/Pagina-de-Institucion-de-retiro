<?php
    //conectamos Con el servidor
        include 'conexion.php';
    //recuperar las variables


$titulo = $_POST['titulo'];
$descri = $_POST['descripcion'];
$tipogu = $_POST['eventos'];
$idd = $_POST['idd'];

    if (!isset($_FILES["imagen"]) || $_FILES["imagen"]["error"] > 0)
{
    echo "Ha ocurrido un error.";
}
else
{
    // Verificamos si el tipo de archivo es un tipo de imagen permitido.
    // y que el tamaño del archivo no exceda los 16MB
    $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
    $limite_kb = 16384;

    if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024)
    {

        // Archivo temporal
        $imagen_temporal = $_FILES['imagen']['tmp_name'];

        // Tipo de archivo
        $tipo = $_FILES['imagen']['type'];

        // Leemos el contenido del archivo temporal en binario.
        $fp = fopen($imagen_temporal, 'r+b');
        $data = fread($fp, filesize($imagen_temporal));
        fclose($fp);
        
        //Podríamos utilizar también la siguiente instrucción en lugar de las 3 anteriores.
        // $data=file_get_contents($imagen_temporal);

        // Escapamos los caracteres para que se puedan almacenar en la base de datos correctamente.
        $data = @mysql_escape_string($data);




        if ($tipogu == "galeria") {
            $resultado = @mysql_query("UPDATE galeria SET capilla='$data',tipo='$tipo',titulo='$titulo',descri='$descri' WHERE idcapilla = $idd");
        }else if ($tipogu == "eventos") {
            $resultado = @mysql_query("UPDATE eventos SET capilla='$data',tipo='$tipo',titulo='$titulo',descri='$descri' WHERE idcapilla = $idd");
        }else if ($tipogu == "bosque") {
            $resultado = @mysql_query("UPDATE bosque SET capilla='$data',tipo='$tipo',titulo='$titulo',descri='$descri' WHERE idcapilla = $idd");
        }else if ($tipogu == "salon") {
            $resultado = @mysql_query("UPDATE salon SET capilla='$data',tipo='$tipo',titulo='$titulo',descri='$descri' WHERE idcapilla = $idd");
        }else if ($tipogu == "habitacion") {
            $resultado = @mysql_query("UPDATE habitacion SET capilla='$data',tipo='$tipo',titulo='$titulo',descri='$descri' WHERE idcapilla = $idd");
        }else if ($tipogu == "banquete") {
            $resultado = @mysql_query("UPDATE banquete SET capilla='$data',tipo='$tipo',titulo='$titulo',descri='$descri' WHERE idcapilla = $idd");
        }






        // Insertamos en la base de datos.
       
       

        if ($resultado)
        {
            echo "El archivo ha sido copiado exitosamente.";
            header('Location: admigaleria.php');
        }
        else
        {
            echo "Ocurrió algun error al copiar el archivo.";
        }
    }
    else
    {
        echo "Formato de archivo no permitido o excede el tamaño límite de $limite_kb Kbytes.";
    }
}
    
?>