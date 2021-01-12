<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Galeria</title>
    <script src="jquery-3.2.1.min.js"></script>

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>


    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>

<body id="page-top" class="index" >

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top" style="background-color: #222222;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
               
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               

 <ul class="nav navbar-nav navbar-left">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                     <li id="todo">
                        <a class="page-scroll" href="">TODO</a>
                    </li>
                    <li id="retiro">
                        <a class="page-scroll" href="#retiro1">RETIROS</a>
                    </li>
                    <li id="evento">
                        <a class="page-scroll" href="#evento1">EVENTOS</a>
                    </li>
                    <li id = "bosque">
                        <a class="page-scroll" href="#bosque1">AREA BOSCOSA</a>
                    </li>
                    <li id="salon">
                        <a class="page-scroll" href="#salon1">SALON DE EVENTOS</a>
                    </li>
                      <li id="habitacion">
                        <a class="page-scroll" href="#habitacion1">HABITACIONES</a>
                    </li>
                    <li id="banquete">
                        <a class="page-scroll" href="#banquete1">SALON DE BANQUETES</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>



            
                  <!--Agragado arriba-->
                
            </div>
        </div>
    </section>

<!--Seccion Inicio-->


<!--Seccion Inicio fin-->







    <!-- Portfolio Grid Section -->
    <section id="retiro1" class="bg-light-gray">
        <div class="container">
             <div class="row" >
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><br><br><br><br><br></h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
            <form action="guardari.php" method="POST" enctype="multipart/form-data" class="col-md-4 col-sm-6">
       <br>
<label for="imagen">Añadir nueva Imagen:</label>
    <input type="file" name="imagen" id="imagen" / required>
    <input type="text" name="titulo" placeholder="titulo de la foto"  required>
    <input type="text" name="descripcion" placeholder="descripcion (opcional)"><center>
<input type="text" name="eventos" value="galeria" style="display: none; visibility:hidden;" >
</center>
    <input type="submit" name="" value="guardar">
    </form>


     <form action="actualizar.php" method="POST" enctype="multipart/form-data" class="col-md-4 col-sm-6">
       <br>
<label for="imagen">Actualizar Imagen:</label>
<input type="text" name="idd" placeholder="Ingrese su id a actualizar"  required>
    <input type="file" name="imagen" id="imagen" / required>
    <input type="text" name="titulo" placeholder="titulo de la foto"  required>
    <input type="text" name="descripcion" placeholder="descripcion (opcional)"><center>
<input type="text" name="eventos" value="galeria" style="display: none; visibility:hidden;" >
</center>
    <input type="submit" name="" value="Modificar">
    </form>

 <form action="eliminar.php" method="POST" enctype="multipart/form-data" class="col-md-4 col-sm-6">
       <br>
<label for="imagen">Eliminar Imagen:</label>
<input type="text" name="idd" placeholder="Ingrese su id a eliminar"  required>
  
    
<input type="text" name="eventos" value="galeria" style="display: none; visibility:hidden;" >
    <input type="submit" name="" value="Eliminar" style="background-image: url(./img/eliminar.png); background-repeat: no-repeat; background-size: cover; background-attachment: fixed; background-position: center center;">
    <br>
    <br>
    <br>    <br>
    <br>
    <br>
    <br>
    <br>
    </form>
  
<!--php-->

<?php 
include 'conexion.php';

    // Consulta de búsqueda de la imagen.
  $consulta = "SELECT * FROM gale WHERE cate LIKE 'retiros' ORDER BY idcapilla DESC";
    $resultado = @mysql_query($consulta) or die(mysql_error());
    $datos = mysql_fetch_assoc($resultado);
    $imagen = $datos['capilla']; // Datos binarios de la imagen.
    $tipo = $datos['tipo'];
     $num1 = $datos['idcapilla'];
     $tutilo = $datos['titulo'];
     $descripcion = $datos['descri'];  
     
    // Mime Type de la imagen.
    // Mandamos las cabeceras al navegador indicando el tipo de datos que vamos a enviar.
    
    // A continuación enviamos el contenido binario de la imagen.
     if ($num1 == 0) {
         # code...
     }
 else{
    echo " <div class='col-md-4 col-sm-6 portfolio-item' >";
                    echo "<a href='#portfolioModal1' class='portfolio-link' data-toggle='modal'>";
                       
                        echo "<img src='obtenerfotografia.php?id=$num1' class='img-responsive' style='width: 100%; height: 220px;' alt=''>";
                    echo '</a>';
                    echo "<div class='portfolio-caption'>";
                       echo " <h4>".$tutilo."(".$num1.")"."</h4>";
                       echo "<p class='text-muted'>$descripcion</p>";
                   echo " </div>";
               echo " </div>";
 }
           


 

   while ($datos = mysql_fetch_assoc($resultado)) {
     $tutilo1 = $datos['titulo'];
     $descripcion1 = $datos['descri']; 
 $num = $datos['idcapilla']; 
  




       echo " <div class='col-md-4 col-sm-6 portfolio-item' >";
                    echo "<a href='#portfolioModal1' class='portfolio-link' data-toggle='modal'>";
                       
                        echo "<img src='obtenerfotografia.php?id=$num' class='img-responsive' style='width: 100%; height: 220px;' alt=''>";
                    echo '</a>';
                    echo "<div class='portfolio-caption'>";
                       echo " <h4>".$tutilo1."(".$num.")"."</h4>";
                       echo "<p class='text-muted'>$descripcion1</p>";
                   echo " </div>";
               echo " </div>";
          
 }

              
              
               



 ?>



<!--php fin-->


            </div>
        </div>
    </section>










    <!-- Portfolio Grid Section -->
    <section id="evento1" class="bg-light-gray">
        <div class="container">
            <div class="row" >
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><br><br><br><br><br></h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
            <form action="guardari.php" method="POST" enctype="multipart/form-data" class="col-md-4 col-sm-6">
        
<label for="imagen">insertar Imagen:</label>
    <input type="file" name="imagen" id="imagen" / required>
    <input type="text" name="titulo" placeholder="titulo de la foto"  required>
    <input type="text" name="descripcion" placeholder="descripcion (opcional)">
   <input type="text" name="eventos" value="eventos" style="display: none;">
    <input type="submit" name="" value="guardar">
    </form>



     <form action="actualizar.php" method="POST" enctype="multipart/form-data" class="col-md-4 col-sm-6">
       <br>
<label for="imagen">Actualizar Imagen:</label>
<input type="text" name="idd" placeholder="Ingrese su id a actualizar"  required>
    <input type="file" name="imagen" id="imagen" / required>
    <input type="text" name="titulo" placeholder="titulo de la foto"  required>
    <input type="text" name="descripcion" placeholder="descripcion (opcional)"><center>
<input type="text" name="eventos" value="eventos" style="display: none; visibility:hidden;" >
</center>
    <input type="submit" name="" value="Modificar">
    </form>

 <form action="eliminar.php" method="POST" enctype="multipart/form-data" class="col-md-4 col-sm-6">
       <br>
<label for="imagen">Eliminar Imagen:</label>
<input type="text" name="idd" placeholder="Ingrese su id a eliminar"  required>
  
    
<input type="text" name="eventos" value="eventos" style="display: none; visibility:hidden;" >
    <input type="submit" name="" value="Eliminar">
    <br>
    <br>
    <br>    <br>
    <br>
    <br>
    <br>
    <br>
    </form>
<!--php-->

<?php 
include 'conexion.php';

    // Consulta de búsqueda de la imagen.
    $consultae = "SELECT * FROM eventos ORDER BY idcapilla DESC";
    $resultadoe = @mysql_query($consultae) or die(mysql_error());
    $datose = mysql_fetch_assoc($resultadoe);
    $imagene = $datose['capilla']; // Datos binarios de la imagen.
    $tipoe = $datose['tipo'];
     $num1e = $datose['idcapilla'];
     $tutiloe = $datose['titulo'];
     $descripcione = $datose['descri'];  
     
    // Mime Type de la imagen.
    // Mandamos las cabeceras al navegador indicando el tipo de datos que vamos a enviar.
    
    // A continuación enviamos el contenido binario de la imagen.
     if ($num1e == 0 ) {
         # code...
     }else{
 echo " <div class='col-md-4 col-sm-6 portfolio-item' >";
                    echo "<a href='#portfolioModal1' class='portfolio-link' data-toggle='modal'>";
                       
                        echo "<img src='obtenerfotografia1.php?id=$num1e' class='img-responsive' style='width: 100%; height: 220px;' alt=''>";
                    echo '</a>';
                    echo "<div class='portfolio-caption'>";
                        echo " <h4>".$tutiloe."(".$num1e.")"."</h4>";
                       echo "<p class='text-muted'>$descripcione</p>";
                   echo " </div>";
               echo " </div>";
     }

           


 

   while ($datose = mysql_fetch_assoc($resultadoe)) {
     $tutilo1e = $datose['titulo'];
     $descripcion1 = $datose['descri']; 
 $nume = $datose['idcapilla']; 
  




       echo " <div class='col-md-4 col-sm-6 portfolio-item' >";
                    echo "<a href='#portfolioModal1' class='portfolio-link' data-toggle='modal'>";
                       
                        echo "<img src='obtenerfotografia1.php?id=$nume' class='img-responsive' style='width: 100%; height: 220px;' alt=''>";
                    echo '</a>';
                    echo "<div class='portfolio-caption'>";
                        echo " <h4>".$tutilo1e."(".$nume.")"."</h4>";
                       echo "<p class='text-muted'>$descripcion1</p>";
                   echo " </div>";
               echo " </div>";
          
 }

              
              
               



 ?>



<!--php fin-->


            </div>
        </div>
    </section>










        <section id="bosque1" class="bg-light-gray">
        <div class="container">
            <div class="row" >
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><br><br><br><br><br></h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
            <form action="guardari.php" method="POST" enctype="multipart/form-data" class="col-md-4 col-sm-6">
        <input type="text" name="eventos" value="bosque" style="display: none;">
<label for="imagen">Imagen:</label>
    <input type="file" name="imagen" id="imagen" / required>
    <input type="text" name="titulo" placeholder="titulo de la foto"  required>
    <input type="text" name="descripcion" placeholder="descripcion (opcional)">
    <input type="submit" name="" value="guardar">
    </form>









     <form action="actualizar.php" method="POST" enctype="multipart/form-data" class="col-md-4 col-sm-6">
       <br>
<label for="imagen">Actualizar Imagen:</label>
<input type="text" name="idd" placeholder="Ingrese su id a actualizar"  required>
    <input type="file" name="imagen" id="imagen" / required>
    <input type="text" name="titulo" placeholder="titulo de la foto"  required>
    <input type="text" name="descripcion" placeholder="descripcion (opcional)"><center>
<input type="text" name="eventos" value="bosque" style="display: none; visibility:hidden;" >
</center>
    <input type="submit" name="" value="Modificar">
    </form>

 <form action="eliminar.php" method="POST" enctype="multipart/form-data" class="col-md-4 col-sm-6">
       <br>
<label for="imagen">Eliminar Imagen:</label>
<input type="text" name="idd" placeholder="Ingrese su id a eliminar"  required>
  
    
<input type="text" name="eventos" value="bosque" style="display: none; visibility:hidden;" >
    <input type="submit" name="" value="Eliminar">
    <br>
    <br>
    <br>    <br>
    <br>
    <br>
    <br>
    <br>
    </form>
<!--php-->

<?php 
include 'conexion.php';

    // Consulta de búsqueda de la imagen.
    $consultab = "SELECT * FROM bosque ORDER BY idcapilla DESC";
    $resultadob = @mysql_query($consultab) or die(mysql_error());
    $datosb = mysql_fetch_assoc($resultadob);
    $imagenb = $datosb['capilla']; // Datos binarios de la imagen.
    $tipob = $datosb['tipo'];
     $num1b = $datosb['idcapilla'];
     $tutilob = $datosb['titulo'];
     $descripcionb = $datosb['descri'];  
     
    // Mime Type de la imagen.
    // Mandamos las cabeceras al navegador indicando el tipo de datos que vamos a enviar.
    if ($num1b == 0) {
        # code...
    }else{
    // A continuación enviamos el contenido binario de la imagen.
 echo " <div class='col-md-4 col-sm-6 portfolio-item' >";
                    echo "<a href='#portfolioModal1' class='portfolio-link' data-toggle='modal'>";
                       
                        echo "<img src='obtenerfotografia2.php?id=$num1b' class='img-responsive' style='width: 100%; height: 220px;' alt=''>";
                    echo '</a>';
                    echo "<div class='portfolio-caption'>";
                          echo " <h4>".$tutilob."(".$num1b.")"."</h4>";
                       echo "<p class='text-muted'>$descripcionb</p>";
                   echo " </div>";
               echo " </div>";
               }
           


 

   while ($datosb = mysql_fetch_assoc($resultadob)) {
     $tutilo1b = $datosb['titulo'];
     $descripcion1b = $datosb['descri']; 
 $numb = $datosb['idcapilla']; 
  




       echo " <div class='col-md-4 col-sm-6 portfolio-item' >";
                    echo "<a href='#portfolioModal1' class='portfolio-link' data-toggle='modal'>";
                       
                        echo "<img src='obtenerfotografia2.php?id=$numb' class='img-responsive' style='width: 100%; height: 220px;' alt=''>";
                    echo '</a>';
                    echo "<div class='portfolio-caption'>";
                         echo " <h4>".$tutilo1b."(".$numb.")"."</h4>";
                       echo "<p class='text-muted'>$descripcion1b</p>";
                   echo " </div>";
               echo " </div>";
          
 }

              
              
               



 ?>



<!--php fin-->


            </div>
        </div>
    </section>





    <section id="salon1" class="bg-light-gray">
        <div class="container">
            <div class="row" >
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><br><br><br><br><br></h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
            <form action="guardari.php" method="POST" enctype="multipart/form-data" class="col-md-4 col-sm-6">
        <input type="text" name="eventos" value="salon" style="display: none;">
<label for="imagen">Imagen:</label>
    <input type="file" name="imagen" id="imagen" / required>
    <input type="text" name="titulo" placeholder="titulo de la foto"  required>
    <input type="text" name="descripcion" placeholder="descripcion (opcional)">
    <input type="submit" name="" value="guardar">
    </form>







     <form action="actualizar.php" method="POST" enctype="multipart/form-data" class="col-md-4 col-sm-6">
       <br>
<label for="imagen">Actualizar Imagen:</label>
<input type="text" name="idd" placeholder="Ingrese su id a actualizar"  required>
    <input type="file" name="imagen" id="imagen" / required>
    <input type="text" name="titulo" placeholder="titulo de la foto"  required>
    <input type="text" name="descripcion" placeholder="descripcion (opcional)"><center>
<input type="text" name="eventos" value="salon" style="display: none; visibility:hidden;" >
</center>
    <input type="submit" name="" value="Modificar">
    </form>

 <form action="eliminar.php" method="POST" enctype="multipart/form-data" class="col-md-4 col-sm-6">
       <br>
<label for="imagen">Eliminar Imagen:</label>
<input type="text" name="idd" placeholder="Ingrese su id a eliminar"  required>
  
    
<input type="text" name="eventos" value="salon" style="display: none; visibility:hidden;" >
    <input type="submit" name="" value="Eliminar">
    <br>
    <br>
    <br>    <br>
    <br>
    <br>
    <br>
    <br>
    </form>
<!--php-->

<?php 
include 'conexion.php';

    // Consulta de búsqueda de la imagen.
    $consultas = "SELECT * FROM salon ORDER BY idcapilla DESC";
    $resultados = @mysql_query($consultas) or die(mysql_error());
    $datoss = mysql_fetch_assoc($resultados);
    $imagens = $datoss['capilla']; // Datos binarios de la imagen.
    $tipos = $datoss['tipo'];
     $num1s = $datoss['idcapilla'];
     $tutilos = $datoss['titulo'];
     $descripcions = $datoss['descri'];  
     
    // Mime Type de la imagen.
    // Mandamos las cabeceras al navegador indicando el tipo de datos que vamos a enviar.
    
    // A continuación enviamos el contenido binario de la imagen.
     if ($num1s == 0) {
         # code...
     }else{
 echo " <div class='col-md-4 col-sm-6 portfolio-item' >";
                    echo "<a href='#portfolioModal1' class='portfolio-link' data-toggle='modal'>";
                       
                        echo "<img src='obtenerfotografia3.php?id=$num1s' class='img-responsive' style='width: 100%; height: 220px;' alt=''>";
                    echo '</a>';
                    echo "<div class='portfolio-caption'>";
                         echo " <h4>".$tutilos."(".$num1s.")"."</h4>";
                       echo "<p class='text-muted'>$descripcions</p>";
                   echo " </div>";
               echo " </div>";
           

}
 

   while ($datoss = mysql_fetch_assoc($resultados)) {
     $tutilo1s = $datoss['titulo'];
     $descripcion1s = $datoss['descri']; 
 $nums = $datoss['idcapilla']; 
  




       echo " <div class='col-md-4 col-sm-6 portfolio-item' >";
                    echo "<a href='#portfolioModal1' class='portfolio-link' data-toggle='modal'>";
                       
                        echo "<img src='obtenerfotografia3.php?id=$nums' class='img-responsive' style='width: 100%; height: 220px;' alt=''>";
                    echo '</a>';
                    echo "<div class='portfolio-caption'>";
                          echo " <h4>".$tutilo1s."(".$nums.")"."</h4>";
                       echo "<p class='text-muted'>$descripcion1s</p>";
                   echo " </div>";
               echo " </div>";
          
 }

              
              
               



 ?>



<!--php fin-->


            </div>
        </div>
    </section>




    <section id="habitacion1" class="bg-light-gray">
        <div class="container">
            <div class="row" >
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><br><br><br><br><br></h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
            <form action="guardari.php" method="POST" enctype="multipart/form-data" class="col-md-4 col-sm-6">
        <input type="text" name="eventos" value="habitacion" style="display: none;">
<label for="imagen">Imagen:</label>
    <input type="file" name="imagen" id="imagen" / required>
    <input type="text" name="titulo" placeholder="titulo de la foto"  required>
    <input type="text" name="descripcion" placeholder="descripcion (opcional)">
    <input type="submit" name="" value="guardar">
    </form>











     <form action="actualizar.php" method="POST" enctype="multipart/form-data" class="col-md-4 col-sm-6">
       <br>
<label for="imagen">Actualizar Imagen:</label>
<input type="text" name="idd" placeholder="Ingrese su id a actualizar"  required>
    <input type="file" name="imagen" id="imagen" / required>
    <input type="text" name="titulo" placeholder="titulo de la foto"  required>
    <input type="text" name="descripcion" placeholder="descripcion (opcional)"><center>
<input type="text" name="eventos" value="habitacion" style="display: none; visibility:hidden;" >
</center>
    <input type="submit" name="" value="Modificar">
    </form>

 <form action="eliminar.php" method="POST" enctype="multipart/form-data" class="col-md-4 col-sm-6">
       <br>
<label for="imagen">Eliminar Imagen:</label>
<input type="text" name="idd" placeholder="Ingrese su id a eliminar"  required>
  
    
<input type="text" name="eventos" value="habitacion" style="display: none; visibility:hidden;" >
    <input type="submit" name="" value="Eliminar">
    <br>
    <br>
    <br>    <br>
    <br>
    <br>
    <br>
    <br>
    </form>
<!--php-->

<?php 
include 'conexion.php';


    // Consulta de búsqueda de la imagen.
    $consultah = "SELECT * FROM habitacion ORDER BY idcapilla DESC";
    $resultadoh = @mysql_query($consultah) or die(mysql_error());
    $datosh = mysql_fetch_assoc($resultadoh);
    $imagenh = $datosh['capilla']; // Datos binarios de la imagen.
    $tipoh = $datosh['tipo'];
     $num1h = $datosh['idcapilla'];
     $tutiloh = $datosh['titulo'];
     $descripcionh = $datosh['descri'];  
     
    // Mime Type de la imagen.
    // Mandamos las cabeceras al navegador indicando el tipo de datos que vamos a enviar.
    
    // A continuación enviamos el contenido binario de la imagen.
     if ($num1h == 0) {
         # code...
     }else{
 echo " <div class='col-md-4 col-sm-6 portfolio-item' >";
                    echo "<a href='#portfolioModal1' class='portfolio-link' data-toggle='modal'>";
                       
                        echo "<img src='obtenerfotografia4.php?id=$num1h' class='img-responsive' style='width: 100%; height: 220px;' alt=''>";
                    echo '</a>';
                    echo "<div class='portfolio-caption'>";
                           echo " <h4>".$tutiloh."(".$num1h.")"."</h4>";
                       echo "<p class='text-muted'>$descripcionh</p>";
                   echo " </div>";
               echo " </div>";
           

}
 

   while ($datosh = mysql_fetch_assoc($resultadoh)) {
     $tutilo1h = $datosh['titulo'];
     $descripcion1h = $datosh['descri']; 
 $numh = $datosh['idcapilla']; 
  




       echo " <div class='col-md-4 col-sm-6 portfolio-item' >";
                    echo "<a href='#portfolioModal1' class='portfolio-link' data-toggle='modal'>";
                       
                        echo "<img src='obtenerfotografia4.php?id=$numh' class='img-responsive' style='width: 100%; height: 220px;' alt=''>";
                    echo '</a>';
                    echo "<div class='portfolio-caption'>";
                          echo " <h4>".$tutilo1h."(".$numh.")"."</h4>";
                       echo "<p class='text-muted'>$descripcion1h</p>";
                   echo " </div>";
               echo " </div>";
          
 }

              
              
               



 ?>



<!--php fin-->


            </div>
        </div>
    </section>









        <section id="banquete1" class="bg-light-gray">
        <div class="container">
            <div class="row" >
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><br><br><br><br><br></h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
            <form action="guardari.php" method="POST" enctype="multipart/form-data"  class="col-md-4 col-sm-6">
        <input type="text" name="eventos" value="banquete" style="display: none;">
<label for="imagen">Imagen:</label>
    <input type="file" name="imagen" id="imagen" / required>
    <input type="text" name="titulo" placeholder="titulo de la foto"  required>
    <input type="text" name="descripcion" placeholder="descripcion (opcional)">
    <input type="submit" name="" value="guardar">
    </form>












     <form action="actualizar.php" method="POST" enctype="multipart/form-data" class="col-md-4 col-sm-6">
       <br>
<label for="imagen">Actualizar Imagen:</label>
<input type="text" name="idd" placeholder="Ingrese su id a actualizar"  required>
    <input type="file" name="imagen" id="imagen" / required>
    <input type="text" name="titulo" placeholder="titulo de la foto"  required>
    <input type="text" name="descripcion" placeholder="descripcion (opcional)"><center>
<input type="text" name="eventos" value="banquete" style="display: none; visibility:hidden;" >
</center>
    <input type="submit" name="" value="Modificar">
    </form>

 <form action="eliminar.php" method="POST" enctype="multipart/form-data" class="col-md-4 col-sm-6">
       <br>
<label for="imagen">Eliminar Imagen:</label>
<input type="text" name="idd" placeholder="Ingrese su id a eliminar"  required>
  
    
<input type="text" name="eventos" value="banquete" style="display: none; visibility:hidden;" >
    <input type="submit" name="" value="Eliminar">
    <br>
    <br>
    <br>    <br>
    <br>
    <br>
    <br>
    <br>
    </form>
<!--php-->

<?php 
include 'conexion.php';

    // Consulta de búsqueda de la imagen.
    $consultad = "SELECT * FROM banquete ORDER BY idcapilla DESC";
    $resultadod = @mysql_query($consultad) or die(mysql_error());
    $datosd = mysql_fetch_assoc($resultadod);
    $imagend = $datosd['capilla']; // Datos binarios de la imagen.
    $tipod = $datosd['tipo'];
     $num1d = $datosd['idcapilla'];
     $tutilod = $datosd['titulo'];
     $descripciond = $datosd['descri'];  
     
    // Mime Type de la imagen.
    // Mandamos las cabeceras al navegador indicando el tipo de datos que vamos a enviar.
    
    // A continuación enviamos el contenido binario de la imagen.
     if ($num1d == 0) {
         # code...
     }else{
 echo " <div class='col-md-4 col-sm-6 portfolio-item' >";
                    echo "<a href='#portfolioModal1' class='portfolio-link' data-toggle='modal'>";
                       
                        echo "<img src='obtenerfotografia5.php?id=$num1d' class='img-responsive' style='width: 100%; height: 220px;' alt=''>";
                    echo '</a>';
                    echo "<div class='portfolio-caption'>";
                         echo " <h4>".$tutilod."(".$num1d.")"."</h4>";
                       echo "<p class='text-muted'>$descripciond</p>";
                   echo " </div>";
               echo " </div>";
           
}

 

   while ($datosd = mysql_fetch_assoc($resultadod)) {
     $tutilo1d = $datosd['titulo'];
     $descripcion1d = $datosd['descri']; 
 $numd = $datosd['idcapilla']; 
  




       echo " <div class='col-md-4 col-sm-6 portfolio-item' >";
                    echo "<a href='#portfolioModal1' class='portfolio-link' data-toggle='modal'>";
                       
                        echo "<img src='obtenerfotografia5.php?id=$numd' class='img-responsive' style='width: 100%; height: 220px;' alt=''>";
                    echo '</a>';
                    echo "<div class='portfolio-caption'>";
                           echo " <h4>".$tutilo1d."(".$numd.")"."</h4>";
                       echo "<p class='text-muted'>$descripcion1d</p>";
                   echo " </div>";
               echo " </div>";
          
 }

              
              
               



 ?>



<!--php fin-->


            </div>
        </div>
    </section>












<script>
$(document).ready(function(){

    $("#retiro").click(function(){
       $("#retiro1").fadeIn();
       $("#evento1").fadeOut();
       $("#bosque1").fadeOut();
       $("#salon1").fadeOut();
       $("#habitacion1").fadeOut();
       $("#banquete1").fadeOut();
 
    });
});
</script>


<script>
$(document).ready(function(){

    $("#evento").click(function(){
       $("#retiro1").fadeOut();
       $("#evento1").fadeIn();
       $("#bosque1").fadeOut();
       $("#salon1").fadeOut();
       $("#habitacion1").fadeOut();
       $("#banquete1").fadeOut();
 
    });
});
</script>


<script>
$(document).ready(function(){

    $("#bosque").click(function(){
       $("#retiro1").fadeOut();
       $("#evento1").fadeOut();
       $("#bosque1").fadeIn();
       $("#salon1").fadeOut();
       $("#habitacion1").fadeOut();
       $("#banquete1").fadeOut();
 
    });
});
</script>

<script>
$(document).ready(function(){

    $("#salon").click(function(){
       $("#retiro1").fadeOut();
       $("#evento1").fadeOut();
       $("#bosque1").fadeOut();
       $("#salon1").fadeIn();
       $("#habitacion1").fadeOut();
       $("#banquete1").fadeOut();
 
    });
});
</script>

<script>
$(document).ready(function(){

    $("#habitacion").click(function(){
       $("#retiro1").fadeOut();
       $("#evento1").fadeOut();
       $("#bosque1").fadeOut();
       $("#salon1").fadeOut();
       $("#habitacion1").fadeIn();
       $("#banquete1").fadeOut();
 
    });
});
</script>

<script>
$(document).ready(function(){

    $("#banquete").click(function(){
       $("#retiro1").fadeOut();
       $("#evento1").fadeOut();
       $("#bosque1").fadeOut();
       $("#salon1").fadeOut();
       $("#habitacion1").fadeOut();
       $("#banquete1").fadeIn();
 
    });
});
</script>
<script>
$(document).ready(function(){

    $("#todo").click(function(){
       $("#retiro1").fadeIn();
       $("#evento1").fadeIn();
       $("#bosque1").fadeIn();
       $("#salon1").fadeIn();
       $("#habitacion1").fadeIn();
       $("#banquete1").fadeIn();
 
    });
});
</script>

<!--inicio de seccion eventos-->
  





    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

   


</body>

</html>
