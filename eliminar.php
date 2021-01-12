<?php 
    include 'conexion.php';
    $tipogu = $_POST['eventos'];
    $idd = $_POST['idd'];
      if ($tipogu == "galeria") {
            $resultado = @mysql_query("DELETE FROM galeria WHERE idcapilla = $idd");
        }else if ($tipogu == "eventos") {
             $resultado = @mysql_query("DELETE FROM eventos WHERE idcapilla = $idd");
        }else if ($tipogu == "bosque") {
             $resultado = @mysql_query("DELETE FROM bosque WHERE idcapilla = $idd");
        }else if ($tipogu == "salon") {
             $resultado = @mysql_query("DELETE FROM salon WHERE idcapilla = $idd");
        }else if ($tipogu == "habitacion") {
             $resultado = @mysql_query("DELETE FROM habitacion WHERE idcapilla = $idd");
        }else if ($tipogu == "banquete") {
             $resultado = @mysql_query("DELETE FROM banquete WHERE idcapilla = $idd");
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

 ?>