<?php
    include 'conexion.php';
    //recuperar las variables


$titulo = $_POST['titulo'];
$descri = $_POST['descripcion'];
$tipogu = $_POST['eventos'];

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
            $resultado = @mysql_query("INSERT INTO gale VALUES (NULL,'$data','$tipo','$titulo','$descri','retiros')");
        }else if ($tipogu == "eventos") {
             $resultado = @mysql_query("INSERT INTO eventos VALUES (NULL,'$data','$tipo','$titulo','$descri','eventos')");
        }else if ($tipogu == "bosque") {
             $resultado = @mysql_query("INSERT INTO bosque VALUES (NULL,'$data','$tipo','$titulo','$descri','bosque')");
        }else if ($tipogu == "salon") {
             $resultado = @mysql_query("INSERT INTO salon VALUES (NULL,'$data','$tipo','$titulo','$descri','salon')");
        }else if ($tipogu == "habitacion") {
             $resultado = @mysql_query("INSERT INTO habitacion VALUES (NULL,'$data','$tipo','$titulo','$descri','habitacion')");
        }else if ($tipogu == "banquete") {
             $resultado = @mysql_query("INSERT INTO banquete VALUES (NULL,'$data','$tipo','$titulo','$descri'),'banquete");
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