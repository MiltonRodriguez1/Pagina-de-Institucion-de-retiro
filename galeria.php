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
 



   
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

   
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

   
    <link href="css/agency.min.css" rel="stylesheet">

  

</head>

<body id="page-top" class="index" >

    
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top" style="background-color: #222222;">
        <div class="container">
            
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Centro De Formacion</a>
            </div>

           
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                 <li>
                        <a class="page-scroll" href="index.php#services">ACERCA DE</a>
                    </li>
                    <li id="todo">
                        <a class="page-scroll" href="">GALERIA</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php#about">SERVICIOS</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php#team">EVENTOS</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php#contact">CONTACTANOS</a>
                    </li>
                </ul>

                <div style="width: 100%; height: 10%;">
  <img src="./img/fondomitad.jpg" style="background-repeat: no-repeat; background-size: cover; background-attachment: fixed; background-position: center center;" width="100%;">

</div>
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
           
        </div>
      
    </nav>



            
                
                
            </div>
        </div>
    </section>








   
    <section id="retiro1" class="bg-light-gray" >
    <br><br><br><br><br><br><br><br><br><br><br>
        <div class="container" id="sectionre">
             <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"></h2>
                    
                </div>
            </div>
            <div class="row" >
            <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

    <script src="js/index.js"></script>

      
<?php 
include 'conexion.php';

    
    $consulta = "SELECT * FROM gale WHERE cate LIKE 'retiros' ORDER BY idcapilla DESC";
    $resultado = @mysql_query($consulta) or die(mysql_error());
    $datos = mysql_fetch_assoc($resultado);
    $imagen = $datos['capilla']; 
    $tipo = $datos['tipo'];
     $num1 = $datos['idcapilla'];
     $tutilo = $datos['titulo'];
     $descripcion = $datos['descri'];  
     
    
     if ($num1 == 0) {
   
     }
 else{


  echo " <div class='col-md-4 col-sm-6 portfolio-item' id='robertarea'>";
                   
                   echo "<div style='width: 95%; height: 95%;' class='gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-4 filter hdpe' >";    
             echo "<img src='obtenerfotografia.php?id=$num1' class='galeria__img'  alt='Cinque Terre' width='100%' height='100%' style='  cursor:pointer; cursor: hand;'>";
                     echo "</div>";
                   
              
               echo " </div>";
             

               
 }
           




   while ($datos = mysql_fetch_assoc($resultado)) {
     $tutilo1 = $datos['titulo'];
     $descripcion1 = $datos['descri']; 
 $num = $datos['idcapilla']; 
  







   echo " <div class='col-md-4 col-sm-6 portfolio-item' id='robertarea'>";
                   
                   echo "<div style=' width: 95%; height: 95%;' class='img-rounded'>";    
             echo "<img src='obtenerfotografia.php?id=$num' class='galeria__img'  alt='Cinque Terre' width='100%' height='100%' style='  cursor:pointer; cursor: hand;'>";
                     echo "</div>";
                   
               echo " </div>";
              
         
              
          
 }


              
              
               



 ?>

 </div>
<script>
$('.galeria__img').click(function(e){
  var img = e.target.src;
  var modal = '<div class="modal" id="modal"><img src="'+ img + '" class="modal__img"><div class="modal__boton" id="modal__boton">X</div></div>';
  $('body').append(modal);
  $('#modal__boton').click(function(){
    $('#modal').remove();
  })
});


$(document).keyup(function(e){
  if (e.which==27) {
    $('#modal').remove();
  }
})
})
</script>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
   <script src="js/index.js"></script>

 <style>
     #robertarea{
       
        padding: 0.1%;
        padding-top: 0%;
      box-sizing: border-box;
      height: 320px;
     }

.modal {
  position: fixed;
  width: 100%;
  height: 100vh;
  background: rgba(0,0,0,0.7);
  top: 0;
  left: 0;
  
  display: flex;
  justify-content: center;
  align-items: center;
}

.modal__img {
  width: 80%;
  max-width: 80%;
  max-height: 95%;

}

.modal__boton {
  width: 50px;
  height: 50px;
  color: #fed136;
  font-weight: bold;
  font-size: 25px;
  font-family: monospace;
  line-height: 50px;
  text-align: center;
  background: #0F0F0F;
  border-radius: 50%;
  cursor: pointer;
  
  position: absolute;
  right: 10px;
  top: 10px;


  }

@media screen and (max-width: 767px){
      #robertarea{
        height: 400px;
       padding-top: 0%;
        padding: 5%;
      box-sizing: border-box;
     }
   
}
@media screen and (max-width: 760px){
    
   #sectionre{
    position: absolute;
    top: 3%;
    left: 1%;
  }
}
@media screen and (max-width: 500px){
      #robertarea{
        height: 310px;
       padding-top: 0%;
        padding: 5%;
      box-sizing: border-box;

     }
     .modal__img {
  width: 100%;
  max-width: 100%;
  height: 500px;
  height: 50%;
}
#sectionre{
    position: absolute;
    top: 3%;
    left: 1%;
  }
}
 </style>






            </div>
        </div>
    </section>










    
    <section id="evento1" class="bg-light-gray">
        <div class="container">
            <div class="row" >
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><br><br><br><br><br></h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
          


      
<?php 
include 'conexion.php';

    
    $consulta = "SELECT * FROM gale WHERE cate LIKE 'eventos' ORDER BY idcapilla DESC";
    $resultado = @mysql_query($consulta) or die(mysql_error());
    $datos = mysql_fetch_assoc($resultado);
    $imagen = $datos['capilla']; 
    $tipo = $datos['tipo'];
     $num1 = $datos['idcapilla'];
     $tutilo = $datos['titulo'];
     $descripcion = $datos['descri'];  
     
    
     if ($num1 == 0) {
   
     }
 else{


  echo " <div class='col-md-4 col-sm-6 portfolio-item' id='robertarea'>";
                   
                   echo "<div style='background: url(obtenerfotografia.php?id=$num1); width: 100%; height: 100%;' class='img-rounded' >";    
             echo "<img src='obtenerfotografia.php?id=$num1' class='galeria__img'  alt='Cinque Terre' width='100%' height='100%' style='  cursor:pointer; cursor: hand;'>";
                     echo "</div>";
                    echo "<div class='portfolio-caption'>";
                       echo " <h4>$tutilo</h4>";
                       echo "<p class='text-muted'>$descripcion</p>";
                   echo " </div>";
               echo " </div>";
             

               
 }
           




   while ($datos = mysql_fetch_assoc($resultado)) {
     $tutilo1 = $datos['titulo'];
     $descripcion1 = $datos['descri']; 
 $num = $datos['idcapilla']; 
  







   echo " <div class='col-md-4 col-sm-6 portfolio-item' id='robertarea'>";
                   
                   echo "<div style='background: url(obtenerfotografia.php?id=$num); width: 100%; height: 100%;' class='img-rounded'>";    
             echo "<img src='obtenerfotografia.php?id=$num' class='galeria__img'  alt='Cinque Terre' width='100%' height='100%' style='  cursor:pointer; cursor: hand;'>";
                     echo "</div>";
                    echo "<div class='portfolio-caption'>";
                       echo " <h4>$tutilo1</h4>";
                       echo "<p class='text-muted'>$descripcion1</p>";
                   echo " </div>";
               echo " </div>";
              
         
              
          
 }


              
              
               



 ?>




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
         


      
<?php 
include 'conexion.php';

    
    $consulta = "SELECT * FROM gale WHERE cate LIKE 'bosque' ORDER BY idcapilla DESC";
    $resultado = @mysql_query($consulta) or die(mysql_error());
    $datos = mysql_fetch_assoc($resultado);
    $imagen = $datos['capilla']; 
    $tipo = $datos['tipo'];
     $num1 = $datos['idcapilla'];
     $tutilo = $datos['titulo'];
     $descripcion = $datos['descri'];  
     
    
     if ($num1 == 0) {
   
     }
 else{


  echo " <div class='col-md-4 col-sm-6 portfolio-item' id='robertarea'>";
                   
                   echo "<div style='background: url(obtenerfotografia.php?id=$num1); width: 100%; height: 100%;' class='img-rounded' >";    
             echo "<img src='obtenerfotografia.php?id=$num1' class='galeria__img'  alt='Cinque Terre' width='100%' height='100%' style='  cursor:pointer; cursor: hand;'>";
                     echo "</div>";
                    echo "<div class='portfolio-caption'>";
                       echo " <h4>$tutilo</h4>";
                       echo "<p class='text-muted'>$descripcion</p>";
                   echo " </div>";
               echo " </div>";
             

               
 }
           




   while ($datos = mysql_fetch_assoc($resultado)) {
     $tutilo1 = $datos['titulo'];
     $descripcion1 = $datos['descri']; 
 $num = $datos['idcapilla']; 
  







   echo " <div class='col-md-4 col-sm-6 portfolio-item' id='robertarea'>";
                   
                   echo "<div style='background: url(obtenerfotografia.php?id=$num); width: 100%; height: 100%;' class='img-rounded'>";    
             echo "<img src='obtenerfotografia.php?id=$num' class='galeria__img'  alt='Cinque Terre' width='100%' height='100%' style='  cursor:pointer; cursor: hand;'>";
                     echo "</div>";
                    echo "<div class='portfolio-caption'>";
                       echo " <h4>$tutilo1</h4>";
                       echo "<p class='text-muted'>$descripcion1</p>";
                   echo " </div>";
               echo " </div>";
              
         
              
          
 }


              
              
               



 ?>





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
          



      
<?php 
include 'conexion.php';

    
    $consulta = "SELECT * FROM gale WHERE cate LIKE 'salon' ORDER BY idcapilla DESC";
    $resultado = @mysql_query($consulta) or die(mysql_error());
    $datos = mysql_fetch_assoc($resultado);
    $imagen = $datos['capilla']; 
    $tipo = $datos['tipo'];
     $num1 = $datos['idcapilla'];
     $tutilo = $datos['titulo'];
     $descripcion = $datos['descri'];  
     
    
     if ($num1 == 0) {
   
     }
 else{


  echo " <div class='col-md-4 col-sm-6 portfolio-item' id='robertarea'>";
                   
                   echo "<div style='background: url(obtenerfotografia.php?id=$num1); width: 100%; height: 100%;' class='img-rounded' >";    
             echo "<img src='obtenerfotografia.php?id=$num1' class='galeria__img'  alt='Cinque Terre' width='100%' height='100%' style='  cursor:pointer; cursor: hand;'>";
                     echo "</div>";
                    echo "<div class='portfolio-caption'>";
                       echo " <h4>$tutilo</h4>";
                       echo "<p class='text-muted'>$descripcion</p>";
                   echo " </div>";
               echo " </div>";
             

               
 }
           




   while ($datos = mysql_fetch_assoc($resultado)) {
     $tutilo1 = $datos['titulo'];
     $descripcion1 = $datos['descri']; 
 $num = $datos['idcapilla']; 
  







   echo " <div class='col-md-4 col-sm-6 portfolio-item' id='robertarea'>";
                   
                   echo "<div style='background: url(obtenerfotografia.php?id=$num); width: 100%; height: 100%;' class='img-rounded'>";    
             echo "<img src='obtenerfotografia.php?id=$num' class='galeria__img'  alt='Cinque Terre' width='100%' height='100%' style='  cursor:pointer; cursor: hand;'>";
                     echo "</div>";
                    echo "<div class='portfolio-caption'>";
                       echo " <h4>$tutilo1</h4>";
                       echo "<p class='text-muted'>$descripcion1</p>";
                   echo " </div>";
               echo " </div>";
              
         
              
          
 }


              
              
               



 ?>

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
         



      
<?php 
include 'conexion.php';

    
    $consulta = "SELECT * FROM gale WHERE cate LIKE 'habitacion' ORDER BY idcapilla DESC";
    $resultado = @mysql_query($consulta) or die(mysql_error());
    $datos = mysql_fetch_assoc($resultado);
    $imagen = $datos['capilla']; 
    $tipo = $datos['tipo'];
     $num1 = $datos['idcapilla'];
     $tutilo = $datos['titulo'];
     $descripcion = $datos['descri'];  
     
    
     if ($num1 == 0) {
   
     }
 else{


  echo " <div class='col-md-4 col-sm-6 portfolio-item' id='robertarea'>";
                   
                   echo "<div style='background: url(obtenerfotografia.php?id=$num1); width: 100%; height: 100%;' class='img-rounded' >";    
             echo "<img src='obtenerfotografia.php?id=$num1' class='galeria__img'  alt='Cinque Terre' width='100%' height='100%' style='  cursor:pointer; cursor: hand;'>";
                     echo "</div>";
                    echo "<div class='portfolio-caption'>";
                       echo " <h4>$tutilo</h4>";
                       echo "<p class='text-muted'>$descripcion</p>";
                   echo " </div>";
               echo " </div>";
             

               
 }
           




   while ($datos = mysql_fetch_assoc($resultado)) {
     $tutilo1 = $datos['titulo'];
     $descripcion1 = $datos['descri']; 
 $num = $datos['idcapilla']; 
  







   echo " <div class='col-md-4 col-sm-6 portfolio-item' id='robertarea'>";
                   
                   echo "<div style='background: url(obtenerfotografia.php?id=$num); width: 100%; height: 100%;' class='img-rounded'>";    
             echo "<img src='obtenerfotografia.php?id=$num' class='galeria__img'  alt='Cinque Terre' width='100%' height='100%' style='  cursor:pointer; cursor: hand;'>";
                     echo "</div>";
                    echo "<div class='portfolio-caption'>";
                       echo " <h4>$tutilo1</h4>";
                       echo "<p class='text-muted'>$descripcion1</p>";
                   echo " </div>";
               echo " </div>";
              
         
              
          
 }


              
              
               



 ?>




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
         



      
<?php 
include 'conexion.php';

    
    $consulta = "SELECT * FROM gale WHERE cate LIKE 'banquete' ORDER BY idcapilla DESC";
    $resultado = @mysql_query($consulta) or die(mysql_error());
    $datos = mysql_fetch_assoc($resultado);
    $imagen = $datos['capilla']; 
    $tipo = $datos['tipo'];
     $num1 = $datos['idcapilla'];
     $tutilo = $datos['titulo'];
     $descripcion = $datos['descri'];  
     
    
     if ($num1 == 0) {
   
     }
 else{


  echo " <div class='col-md-4 col-sm-6 portfolio-item' id='robertarea'>";
                   
                   echo "<div style='background: url(obtenerfotografia.php?id=$num1); width: 100%; height: 100%;' class='img-rounded' >";    
             echo "<img src='obtenerfotografia.php?id=$num1' class='galeria__img'  alt='Cinque Terre' width='100%' height='100%' style='  cursor:pointer; cursor: hand;'>";
                     echo "</div>";
                    echo "<div class='portfolio-caption'>";
                       echo " <h4>$tutilo</h4>";
                       echo "<p class='text-muted'>$descripcion</p>";
                   echo " </div>";
               echo " </div>";
             

               
 }
           




   while ($datos = mysql_fetch_assoc($resultado)) {
     $tutilo1 = $datos['titulo'];
     $descripcion1 = $datos['descri']; 
 $num = $datos['idcapilla']; 
  







   echo " <div class='col-md-4 col-sm-6 portfolio-item' id='robertarea'>";
                   
                   echo "<div style='background: url(obtenerfotografia.php?id=$num); width: 100%; height: 100%;' class='img-rounded'>";    
             echo "<img src='obtenerfotografia.php?id=$num' class='galeria__img'  alt='Cinque Terre' width='100%' height='100%' style='  cursor:pointer; cursor: hand;'>";
                     echo "</div>";
                    echo "<div class='portfolio-caption'>";
                       echo " <h4>$tutilo1</h4>";
                       echo "<p class='text-muted'>$descripcion1</p>";
                   echo " </div>";
               echo " </div>";
              
         
              
          
 }


              
              
               



 ?>





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
                         <li><a href="login.php">Dereechos de autor &copy;</a>
                        </li>
                        <li><a href="login.php">ADMISNISTRADOR</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

  
    <script src="vendor/jquery/jquery.min.js"></script>

   
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

  
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>


    <script src="js/agency.min.js"></script>

</body>

</html>
