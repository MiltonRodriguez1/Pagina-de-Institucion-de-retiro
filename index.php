
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" href="./img/logocasade.ico"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<meta name="viewport" content="width=device-width. user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Casa de retiros</title>
    <script src="jquery-3.2.1.min.js"></script>


 <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">









<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>




<style>
body {
  font-family: Verdana, sans-serif;
  margin: 0;
}

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0.2px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 20%;
}


.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: none;
  background-color: black;

}


.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  height: 58%;
  max-width: 1200px;
  max-height: 60%;
}


.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer
}


.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}


.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}


.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}


.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}
</style>













    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>


    <link href="css/agency.min.css" rel="stylesheet">

  

</head>

<body id="page-top" class="index">


    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"> Centro De Formacion</a>
            </div>

           
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">ACERCA DE</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">GALERIA</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">SERVICIOS</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">EVENTOS</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">CONTACTANOS</a>
                    </li>
                </ul>
            </div>

        </div>
      
    </nav>

   
    <header>

        <div class="container">

            <div class="intro-text">

                <div class="intro-lead-in"></div>
                <div class="intro-heading"> CENTRO DE FORMACIÓN Y CASA DE RETIROS SAN JERONIMO EMILIANI</div>
                <a href="#services" class="page-scroll btn btn-xl">Ver mas</a> <br>
                 <img src="./img/logocasade.png" style="width: 10%; height: 10%;">
            </div>
        </div>
    </header>

 
    <section id="services" style="background-image: url(./img/fondo4.jpg); background-repeat: no-repeat; background-size: cover; background-attachment: fixed; background-position: center center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="section-heading" style="color: white;">ACERCA DE</h1>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row text-center">
                



<div class="row">

     <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <a href="#services"><img src="./img/nosobla.png" style="width:100%" onclick="openModal();currentSlide(1)" class="img-responsive"></a>
                    </span>
                    <h4 class="service-heading" style="color: white;">QUIENES SOMOS </h4>
                 <br><br> <br><br>
                </div> 
  
       <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <a href="#services"><img src="./img/historia.png" style="width:100%" onclick="openModal();currentSlide(2)" class="img-responsive"></a>
                    </span>
                    <h4 class="service-heading" style="color: white;">HISTORIA</h4>
                 <br><br> <br><br>
                </div>

  
      <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <a href="#services"><img src="./img/vision.png" style="width:100%" onclick="openModal();currentSlide(3)" class="img-responsive"></a>
                    </span>
                    <h4 class="service-heading" style="color: white;">VISION</h4>
                 <br><br> <br><br>
                </div>
  

       <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <a href="#services"><img src="./img/mision.png" style="width:100%" onclick="openModal();currentSlide(4)" class="img-responsive"></a>
                    </span>
                    <h4 class="service-heading" style="color: white;">MISION</h4>
                 <br><br>
                </div>


                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <a href="#services"><img src="./img/valores.png" style="width:100%" onclick="openModal();currentSlide(5)" class="img-responsive"></a>
                    </span>
                    <h4 class="service-heading" style="color: white;">NUESTROS VALORES</h4>
                 <br><br>
                </div>

</div>

<div id="myModal" class="modal" style="background-image: url(./img/fondo4.jpg); background-repeat: no-repeat; background-size: cover; background-attachment: fixed; background-position: center center;">

  <span class="close cursor" onclick="closeModal()" style="color: white; font-size: 40px">&times;</span>
  <div class="modal-content" style="height: 60%;">

    <div class="mySlides">
      <div class="numbertext">1 / 5</div>

      <img src="./img/nosobla.png" style="width:16.5%; height: 40%; ">
              <h1 class="service-heading">QUIENES SOMOS </h1>
     <p class="service-heading" style="text-align: center;">
<?php 
include 'conexion.php';

 
    $consultae = "SELECT * FROM acerca";
    $resultadoe = @mysql_query($consultae) or die(mysql_error());
    $datose = mysql_fetch_assoc($resultadoe);

    $imagene = $datose['somos']; 
echo "$imagene";

 ?>
 </p>
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 5</div>
      <img src="./img/historia.png" style="width:16.5%; height: 40%; ">
      <h1 class="service-heading">HISTORIA</h1>
       <p class="service-heading" style="text-align: justify;"><?php 
include 'conexion.php';

    $consultae = "SELECT * FROM acerca";
    $resultadoe = @mysql_query($consultae) or die(mysql_error());
    $datose = mysql_fetch_assoc($resultadoe);

    $tipoe = $datose['historia'];
   
echo "$tipoe";

 ?></p>
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 5</div>
      <img src="./img/vision.png" style="width:16.5%; height: 40%; ">
      <h1 class="service-heading">VISION</h1>
       <p class="service-heading" style="text-align: justify;">
<br><br>
<?php 
include 'conexion.php';

   
    $consultae = "SELECT * FROM acerca";
    $resultadoe = @mysql_query($consultae) or die(mysql_error());
    $datose = mysql_fetch_assoc($resultadoe);

     $num1e = $datose['vision'];
echo "$num1e";

 ?></p>
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 5</div>
      <img src="./img/mision.png" style="width:16.5%; height: 40%; ">
      <h1 class="service-heading">MISION</h1>
      <p class="service-heading" style="text-align: justify;">
<br><?php 
include 'conexion.php';

    
    $consultae = "SELECT * FROM acerca";
    $resultadoe = @mysql_query($consultae) or die(mysql_error());
    $datose = mysql_fetch_assoc($resultadoe);
 
     $tutiloe = $datose['mision'];
 echo "$tutiloe";
   

 ?> 
 <br> </p>
    </div>


    <div class="mySlides">
      <div class="numbertext">5 / 5</div>
      <img src="./img/valores.png" style="width:16.5%; height: 40%; " ">
      <h1 class="service-heading">NUESTROS VALORES</h1>
     
     <p class="service-heading" style="text-align: justify;">
<?php 
include 'conexion.php';

  
    $consultae = "SELECT * FROM acerca";
    $resultadoe = @mysql_query($consultae) or die(mysql_error());
    $datose = mysql_fetch_assoc($resultadoe);
 
     $descripcione = $datose['valores'];  

   echo "$descripcione";

 ?>
   
 </p>
    </div>
    </div>

    
    <a class="prev" onclick="plusSlides(-1)" style="color: black; position: absolute; left: 0%;">&#10094;</a>
    <a class="next" onclick="plusSlides(1)" style="color: black">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="./img/nosobla.png" style="width:40%" onclick="currentSlide(1)" alt="QUIENES SOMOS">
      <p style="font-family: Montserrat; font-size: 10px; color: white;"><br> QUIENES SOMOS</p>
    </div>
    <div class="column">
      <img class="demo cursor" src="./img/historia.png" style="width:40%" onclick="currentSlide(2)" alt="HISTORIA">
      <p style="font-family: Montserrat; font-size: 10px; color: white;"><br> HISTORIA</p>
    </div>
    <div class="column">
      <img class="demo cursor" src="./img/vision.png" style="width:40%" onclick="currentSlide(3)" alt="VISION">
      <p style="font-family: Montserrat; font-size: 10px; color: white;"><br> VISION</p>
    </div>
    <div class="column">
      <img class="demo cursor" src="./img/mision.png" style="width:40%" onclick="currentSlide(4)" alt="MISION">
      <p style="font-family: Montserrat; font-size: 10px; color: white;"><br> MISION</p>
    </div>
    <div class="column">
      <img class="demo cursor" src="./img/valores.png" style="width:37%" onclick="currentSlide(5)" alt="NUESTROS VALORES">
      <p style="font-family: Montserrat; font-size: 10px; color: white;"><br> QUIENES SOMOS</p>
    </div>
  </div>
</div>

















            
        
                
            </div>
        </div>
    </section>


    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Galeria</h2>
                    <h3 class="section-subheading text-muted">Los albunes de El Centro de Formación y Casa de Retiros San Jerónimo Emiliani, San Pedro Sacatepéquez.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="galeria.php#retiro" class="portfolio-link" >
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/roundicons.jpg" class="img-responsive" style="width: 100%; height: 220px;" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Capilla</h4>
                        <p class="text-muted">centro de comunicacion espiritual</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="galeria.php#evento" class="portfolio-link" >
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/startup-framework.JPG" class="img-responsive" alt="" style="width: 100%; height: 220px;">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Salón  de eventos </h4>
                        <p class="text-muted">Espacio para diferentes actividades</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="galeria.php#bosque" class="portfolio-link">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/banquetes.jpg" class="img-responsive" alt="" style="width: 100%; height: 220px;">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Area boscosa </h4>
                        <p class="text-muted">Area para poder relajarse enmedio de los arboles</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="galeria.php#salon" class="portfolio-link">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/habitacion.JPG" class="img-responsive" alt="" style="width: 100%; height: 220px;">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Salon de Eventos</h4>
                        <p class="text-muted">Lugar para realizar diversos tipos de eventos</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="galeria.php#habitacion" class="portfolio-link">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cancha.jpg" class="img-responsive" alt="" style="width: 100%; height: 220px;">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Habitacion </h4>
                        <p class="text-muted">Lugares comodos para descansar </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="galeria.php#banquete" class="portfolio-link" >
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/bosques.JPG" class="img-responsive" alt="" style="width: 100%; height: 220px;">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Salon de Banquete</h4>
                        <p class="text-muted">Area para diversos tipos de recibidos</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

 
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">SERVICIOS</h2>
                    <h3 class="section-subheading text-muted">El Centro de Formación y Casa de Retiros San Jerónimo Emiliani te ofrece
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image" id="div2">
                                <img class="img-circle img-responsive" src="img/portfolio/roundicons.jpg" style="width: 100%; height: 100%; cursor: pointer; cursor: hand;" alt="" >
                            </div>


                            <div class="timeline-panel" >
                                <div class="timeline-heading">
                                    <h1 id="titulo1"> CAPILLA</h1>
                                    
                                </div>

                                <div class="timeline-body" id="div1" style="display:none;  ">
                             
                                <h4 class="subheading">Centro de comunicacion espiritual</h4>
                                    <p1 class="text-muted"><?php 
include 'conexion.php';

  
    $consultae = "SELECT * FROM servicios";
    $resultadoe = @mysql_query($consultae) or die(mysql_error());
    $datose = mysql_fetch_assoc($resultadoe);
 
     $descripcione = $datose['capilla'];  

   echo "$descripcione";

 ?></p1>
                                </div>
                            </div>


                           

<style>
#div2 {   
-webkit-transition:0.5s;  
-moz-transition:0.5s;
-o-transition:0.5s;
-ms-transition:0.5s;
}
    #div2:hover {
cursor:pointer;
-webkit-transform:scale(1.3);   
-moz-transform:scale(1.3);
-o-transform:scale(1.3);
-ms-transform:scale(1.3);
-webkit-transition:0.8s;   
-moz-transition:0.8s;
-o-transition:0.8s;
-ms-transition:0.8s;
}


#div4 {   
-webkit-transition:0.5s;   
-moz-transition:0.5s;
-o-transition:0.5s;
-ms-transition:0.5s;
}
    #div4:hover {
cursor:pointer;
-webkit-transform:scale(1.3);  
-moz-transform:scale(1.3);
-o-transform:scale(1.3);
-ms-transform:scale(1.3);
-webkit-transition:0.8s;  
-moz-transition:0.8s;
-o-transition:0.8s;
-ms-transition:0.8s;
}


#div6 {   
-webkit-transition:0.5s;  
-moz-transition:0.5s;
-o-transition:0.5s;
-ms-transition:0.5s;
}
    #div6:hover {
cursor:pointer;
-webkit-transform:scale(1.3);  
-moz-transform:scale(1.3);
-o-transform:scale(1.3);
-ms-transform:scale(1.3);
-webkit-transition:0.8s;  
-moz-transition:0.8s;
-o-transition:0.8s;
-ms-transition:0.8s;
}


#div8 {   
-webkit-transition:0.5s;  
-moz-transition:0.5s;
-o-transition:0.5s;
-ms-transition:0.5s;
}
    #div8:hover {
cursor:pointer;
-webkit-transform:scale(1.3); 
-moz-transform:scale(1.3);
-o-transform:scale(1.3);
-ms-transform:scale(1.3);
-webkit-transition:0.8s; 
-moz-transition:0.8s;
-o-transition:0.8s;
-ms-transition:0.8s;
}


#div10 {  
-webkit-transition:0.5s;   
-moz-transition:0.5s;
-o-transition:0.5s;
-ms-transition:0.5s;
}
    #div10:hover {
cursor:pointer;
-webkit-transform:scale(1.3);  
-moz-transform:scale(1.3);
-o-transform:scale(1.3);
-ms-transform:scale(1.3);
-webkit-transition:0.8s;   
-moz-transition:0.8s;
-o-transition:0.8s;
-ms-transition:0.8s;
}
</style>






<script>
$(document).ready(function(){

    $("#div2").hover(function(){
       $("#div1").fadeToggle();
       
       
      
    });
});
</script>

<script>
$(document).ready(function(){
    $("#div4").hover(function(){
       $("#div3").fadeToggle();
      
       
      
    });
});
</script>

<script>
$(document).ready(function(){
    $("#div6").hover(function(){
       $("#div5").fadeToggle();
      
       
      
    });
});
</script>

<script>
$(document).ready(function(){
    $("#div8").hover(function(){
       $("#div7").fadeToggle();
   
       
      
    });
});
</script>

<script>
$(document).ready(function(){
    $("#div10").hover(function(){
       $("#div9").fadeToggle();
      
       
      
    });
});
</script>


                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image" id="div4">
                                <img class="img-circle img-responsive" src="img/portfolio/startup-framework.JPG" style="width: 100%; height: 100%; cursor: pointer; cursor: hand;" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h2 id="titulo2">SALÓN DE EVENTOS</h2>
                                    
                                </div>
                                <div class="timeline-body" id="div3" style="display:none;">
                               
                                <h4 class="subheading">Espacio para diferentes actividades</h4>
                                    <p class="text-muted"><?php 
include 'conexion.php';


    $consultae = "SELECT * FROM servicios";
    $resultadoe = @mysql_query($consultae) or die(mysql_error());
    $datose = mysql_fetch_assoc($resultadoe);
 
     $descripcione1 = $datose['salon'];  

   echo "$descripcione1";

 ?></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image" id="div6">
                                <img class="img-circle img-responsive" src="img/portfolio/banquetes.jpg" style="width: 100%; height: 100%; cursor: pointer; cursor: hand;" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h1 id="titulo3">SALÓN DE BANQUETES</h1>
                                    
                                </div>
                                <div class="timeline-body" id="div5" style="display:none;   ">
                                 
                                <h4 class="subheading">Ideal para la celebracion de recepciones de:  </h4>
                                    <p class="text-muted"><?php 
include 'conexion.php';

   
    $consultae = "SELECT * FROM servicios";
    $resultadoe = @mysql_query($consultae) or die(mysql_error());
    $datose = mysql_fetch_assoc($resultadoe);
 
     $descripcione2 = $datose['banquete'];  

   echo "$descripcione2";

 ?></p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image" id="div8">
                                <img class="img-circle img-responsive" src="img/portfolio/habitacion.JPG" style="width: 100%; height: 100%; cursor: pointer; cursor: hand;" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3 id="titulo4">HABITACIONES</h3>
                                    
                                </div>
                                <div class="timeline-body" id="div7" style="display:none;  ">
                                
                                <h4 class="subheading">Contamos con:</h4>
                                    <p class="text-muted"><?php 
include 'conexion.php';

  
    $consultae = "SELECT * FROM servicios";
    $resultadoe = @mysql_query($consultae) or die(mysql_error());
    $datose = mysql_fetch_assoc($resultadoe);
 
     $descripcione3 = $datose['habitacion'];  

   echo "$descripcione3";

 ?></p>
                                </div>
                            </div>
                        </li>

<li>
                            <div class="timeline-image" id="div10">
                                <img class="img-circle img-responsive" src="img/portfolio/cancha.jpg" style="width: 100%; height: 100%; cursor: pointer; cursor: hand;" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3 id="titulo5">ÁREA RECREATIVA</h3>
                                   
                                </div>
                                
                                <div class="timeline-body" id="div9" style="display:none;  ">
                           
                                 <h4 class="subheading">Cancha deportiva  </h4>
                                    <p class="text-muted"><?php 
include 'conexion.php';

    
    $consultae = "SELECT * FROM servicios";
    $resultadoe = @mysql_query($consultae) or die(mysql_error());
    $datose = mysql_fetch_assoc($resultadoe);
 
     $descripcione4 = $datose['area'];  

   echo "$descripcione4";

 ?> </p>
                                </div>
                            </div>
                        </li>
                       




                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Otras
                                    <br>Areas
                                    <br>Ofrecidas</h4>




                            </div>
                             <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Areas</h4>
                                    <h4 class="subheading">Contamos con:</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Amplio parqueo <br> Duchas con agua caliente<br> Otros. </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

  
    <section id="team" class="bg-light-gray">
        <div class="container">
           <iframe name="window" src="index2.php" width="100%;" height="1000px" marginwidth="0" scrolling="no" frameborder="0"></iframe>

                 </div>
    </section>

   
    <aside class="clients">
        <div class="container">
            
        </div>
    </aside>


    <section id="contact" style="background-image: url(./img/fondon.png); background-repeat: no-repeat; background-size: cover; background-attachment: fixed; background-position: center center;" width="100%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">CONTACTANOS</h2>
                    <h3 class="section-subheading text-muted">Comunicate con Nosostros </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Tu Nombre *" id="name" required data-validation-required-message="Escribe tu name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Tu Correo *" id="email" required data-validation-required-message="Ingresa tui correo.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Tu telefono *" id="phone" required data-validation-required-message="Ingresa tu correo">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Tu Mensaje *" id="message" required data-validation-required-message="Escribetu mensaje ."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                             <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <input type="submit" class="btn btn-xl" value="Enviar Mensaje">
                            </div>
                              <div class="col-md-9 col-sm-6 portfolio-item">        
    <iframe src="https://her.is/2vDK4eu" width="600" height="450" frameborder="0" style="border:0" allowfullscreen align="right" width=100% high="100%"></iframe>
   
  </div>
                           
                        </div>
                    </form>

                </div>
            </div>
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
