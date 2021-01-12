<?php
    //conectamos Con el servidor
        include 'conexion.php';
    //recuperar las variables


$titulo = $_POST['somos'];
$descri = $_POST['historia'];
$tipogu = $_POST['vision'];
$idd = $_POST['mision'];
$valo = $_POST['valores'];

  



        
           $resultado = @mysql_query("UPDATE servicios SET capilla='$titulo',salon='$descri',banquete='$tipogu',habitacion='$idd',area='$valo' WHERE id = 1");

       
       

        if ($resultado)
        {
            echo "El archivo ha sido copiado exitosamente.";
            header('Location: admiacerca.php');
        }
        else
        {
            echo "Ocurrió algun error aen la actualizacion";
        }
  

    
?>