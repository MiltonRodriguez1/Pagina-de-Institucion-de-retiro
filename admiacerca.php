
<?php 

if ( !isset($_COOKIE['user_valido'])){
  die("no esta loggeado");
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" href="./img/logocasade.ico"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width. user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Galeria</title>
    <script src="jquery-3.2.1.min.js"></script>



  <script src="https://cloud.tinymce.com/stable/tinymce.min.js" ></script>
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
                <a class="navbar-brand page-scroll" href="#page-top"> Centro De Formacion</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#retiro1">ACERCA DE</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#galeria">GALERIA</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#servicios">SERVICIOS</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#eventos">EVENTOS</a>
                    </li>
               
                </ul>

          

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>



            
                  <!--Agragado arriba-->
           

<!--Seccion Inicio-->

<section id="retiro1" class="bg-light-gray">
<div class="container">
<br><br><br><br><br> <br><br><br>
<center><h1>SECCION ACERCA DE NOSOSTROS</h1></center>
<form action="acerca.php" method="POST" enctype="multipart/form-data" class="col-md-4 col-sm-6">

<?php 
include 'conexion.php';

    // Consulta de búsqueda de la imagen.
    $consultae = "SELECT * FROM acerca";
    $resultadoe = @mysql_query($consultae) or die(mysql_error());
    $datose = mysql_fetch_assoc($resultadoe);
   $idad = $datose['id'];
    $imagene = $datose['somos']; // Datos binarios de la imagen.
    $tipoe = $datose['historia'];
     $num1e = $datose['vision'];
     $tutiloe = $datose['mision'];
     $descripcione = $datose['valores'];  
     
    // Mime Type de la imagen.
    // Mandamos las cabeceras al navegador indicando el tipo de datos que vamos a enviar.
    
    // A continuación enviamos el contenido binario de la imagen.
     if ($idad == 0 ) {
         # code...
     }else{
        
       

echo " <div class='row' id='sectacerca'>";
echo " <div class='col-md-4' style='width: 100%;' >";
                     echo " <h4> QUIENES SOMOS </h4>";
                       echo " <textarea style='width: 100%; height: 100px; max-width: 100%; max-height: 100px;' name ='somos' required >". $imagene." </textarea>";
                       echo " </div>";
echo " <div class='col-md-4' style='width: 100%;' >";
  echo " <h4>HISTORIA </h4>";
  echo " <textarea  style='width: 100%; height: 100px; max-width: 100%; max-height: 100px;' name ='historia' required>". $tipoe ." </textarea>";
  echo " </div>";
  echo " <div class='col-md-4' style='width: 100%;'>";
  echo " <h4>VISION </h4>";
  echo " <textarea  style='width: 100%; height: 100px; max-width: 100%; max-height: 100px;' name ='vision'  required>". $num1e ."</textarea>";
 echo " </div>";
  echo " <div class='col-md-4' style='width: 100%;'>";
  echo " <h4> MISION </h4>";
  echo " <textarea  style='width: 100%; height: 100px; max-width: 100%; max-height: 100px;' name ='mision' required>". $tutiloe ."</textarea>";
  echo " </div>";
  echo " <div class='col-md-4' style='width: 100%;'>";
  echo " <h4>NUESTROS VALORES </h4>";
  echo " <textarea  style='width: 100%; height: 100px; max-width: 100%; max-height: 100px;' name ='valores' required>". $descripcione."</textarea>";
echo " </div>";
echo " </div>";

              
     }

   

 ?>
 <style type="text/css">
    #sectacerca{
  width: 1150px;
  background-color: white;
  box-sizing: border-box;
   }

 @media only screen and (max-width : 1250px){
   #sectacerca{
  width: 1120px;
   }
   }

   @media only screen and (max-width : 1050px){
   #sectacerca{
  width: 950px;
   }
   }


      @media only screen and (max-width : 950px){
   #sectacerca{
  width: 800px;
   }
   }

      @media only screen and (max-width : 850px){
   #sectacerca{
  width: 700px;
   }
   }

      @media only screen and (max-width : 750px){
   #sectacerca{
  width: 600px;
   }
   }

      @media only screen and (max-width : 650px){
   #sectacerca{
  width: 450px;
   }
   }

     @media only screen and (max-width : 550px){
   #sectacerca{
  width: 350px;
   }
   }

     @media only screen and (max-width : 450px){
   #sectacerca{
  width: 250px;
   }
   }
 </style>
 <center>
<input type="submit" name="" value="Guardar Cambios" style="background-color: yellow;">
</center>
</form>

</div>
    
</section>
















<section id="servicios" class="bg-light-gray">
<div class="container">
<br><br><br><br><br> <br><br><br>
<center><h1>SECCION SEVICIOS</h1></center>
<form action="servicioo.php" method="POST" enctype="multipart/form-data" class="col-md-4 col-sm-6">
<center>
<?php 
include 'conexion.php';

    // Consulta de búsqueda de la imagen.
    $consultae = "SELECT * FROM servicios";
    $resultadoe = @mysql_query($consultae) or die(mysql_error());
    $datose = mysql_fetch_assoc($resultadoe);
   $idad = $datose['id'];
    $imagene = $datose['capilla']; // Datos binarios de la imagen.
    $tipoe = $datose['salon'];
     $num1e = $datose['banquete'];
     $tutiloe = $datose['habitacion'];
     $descripcione = $datose['area'];  
     
    // Mime Type de la imagen.
    // Mandamos las cabeceras al navegador indicando el tipo de datos que vamos a enviar.
    
    // A continuación enviamos el contenido binario de la imagen.
     if ($idad == 0 ) {
         # code...
     }else{
        echo "<br> <br> ";
       
echo "<center>";
echo " <div class='row'>";
                     echo " <h4> CAPILLA </h4>";
  echo " <textarea style='width: 100%; height: 100px; max-width: 100%; max-height: 100px;' name ='somos' required>". $imagene." </textarea>";
  echo " <h4>SALON DE EVENTOS </h4>";
  echo " <textarea  style='width: 100%; height: 100px; max-width: 100%; max-height: 100px;' name ='historia' required>". $tipoe ." </textarea>";
  echo " <h4>SALON DE BANQUETES </h4>";
  echo " <textarea  style='width: 100%; height: 100px; max-width: 100%; max-height: 100px;' name ='vision'  required>". $num1e ."</textarea>";
  echo " <h4> HABITACIONES </h4>";
  echo " <textarea  style='width: 100%; height: 100px; max-width: 100%; max-height: 100px;' name ='mision' required>". $tutiloe ."</textarea>";
  echo " <h4>AREA RECREATIVA </h4>";
  echo " <textarea  style='width: 100%; height: 100px; max-width: 100%; max-height: 100px;' name ='valores' required>". $descripcione."</textarea>";

echo " </div>";
 echo "</center>";
              
     }

   

 ?>
<input type="submit" name="" value="Guardar Cambios">
</center>
</form>

</div>
    
</section>
<!--Seccion Inicio fin-->





 <section id="eventos" class="bg-light-gray">
        <div class="container">
        <center><h1>Secccion Eventos </h1></center>
           <iframe name="window" src="index1.php" width="100%;" height="1000px" marginwidth="0" scrolling="height" frameborder="0"></iframe>

                 </div>
    </section>


 <section id="galeria" class="bg-light-gray">
        <div class="container"><br><br><br>
        <center><h1>Secccion GALERIA</h1></center>
           <iframe name="window" src="admigaleria.php" width="110%;" height="1200px" marginwidth="0" scrolling="height" frameborder="0"></iframe>

                 </div>
    </section>

 <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright"> <b>CENTRO DE FORMACION Y CASA DE RETIROS SAN JERONIMO EMILIANI</b> <br></span>
                    <span class="copyright"> <i>número de teléfono Llamar 2431 1140 Ext 116</i><br> </span>
                    
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        
                        <li><a href="https://www.facebook.com/Casaderetirossanjeronimoemiliani/"><i class="fa fa-facebook"></i></a>
                        </li>
                        
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                       
                        <li>
                          <span class="copyright"> Km. 27,7 carretera a Santo Domingo Xenacoj, Aldea El Frijolillo, San Pedro Sacatepequez</span>
                        </li>
                         <li><a href="insertari.php">Dereechos de autor &copy;</a>
                        </li>
                        <li><a id="cerrar" href="login.php?cerrarsession=1" target="_blank">CERRAR SESION</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

   

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
<script type="text/javascript">
  $( document ).ready(function() {
    $("#cerrar").on("click",function(){
        window.open('','_self').close();
    });
  });
</script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
