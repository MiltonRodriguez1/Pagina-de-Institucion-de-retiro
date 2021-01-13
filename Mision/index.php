<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Inicio</title>
       

		<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/style.css">
<meta name="viewport" content="width=device-width. user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    </head>
<body >

        <div id="loader-wrapper">
            <div class="logo"></div>
            <div id="loader">
            </div>
        </div>
<style type="text/css">
	@media only screen and (max-width : 500px){
#contenedor{

	}
	#tstm_sec{
		
	}
}
</style>


<!-- Nosotros -->
<section id="tstm_sec" style="width: 100%; height: 600px;" style="background-image: url(./img/fondo4.jpg); background-repeat: no-repeat; background-size: cover; background-attachment: fixed; background-position: center center;">
	<center>
	<div class="container" style="top: 20%;">
		<div class="row">
			<div class="col-lg-12">
				<div class="all_tstm">

				<div class="clnt_tstm">
					<div class="sngl_tstm">
						<i class="fa fa-quote-right"></i>
						<h3>QUIENES SOMOS</h3>
						<p><?php 
include 'conexion.php';

 
    $consultae = "SELECT * FROM acerca";
    $resultadoe = @mysql_query($consultae) or die(mysql_error());
    $datose = mysql_fetch_assoc($resultadoe);

    $imagene = $datose['somos']; 
echo "$imagene";

 ?> </p>

					</div>
				</div>

				<div class="clnt_tstm">
					<div class="sngl_tstm">
						<i class="fa fa-quote-right"></i>
						<h3>HISTORIA</h3>
						<p><?php 
include 'conexion.php';

    $consultae = "SELECT * FROM acerca";
    $resultadoe = @mysql_query($consultae) or die(mysql_error());
    $datose = mysql_fetch_assoc($resultadoe);

    $tipoe = $datose['historia'];
   
echo "$tipoe";

 ?></p>

					</div>
				</div>

				<div class="clnt_tstm">
					<div class="sngl_tstm">
						<i class="fa fa-quote-right"></i>
						<h3>MISIÓN</h3>
						<p><?php 
include 'conexion.php';

    
    $consultae = "SELECT * FROM acerca";
    $resultadoe = @mysql_query($consultae) or die(mysql_error());
    $datose = mysql_fetch_assoc($resultadoe);
 
     $tutiloe = $datose['mision'];
 echo "$tutiloe";
   

 ?> 

					</p>

					</div>
				</div>
				<div class="clnt_tstm">
					<div class="sngl_tstm">
						<i class="fa fa-quote-right"></i>
						<h3>VISIÓN</h3>
						<p><?php 
include 'conexion.php';

   
    $consultae = "SELECT * FROM acerca";
    $resultadoe = @mysql_query($consultae) or die(mysql_error());
    $datose = mysql_fetch_assoc($resultadoe);

     $num1e = $datose['vision'];
echo "$num1e";

 ?></p>

					</div>
				</div>
				<div class="clnt_tstm">
					<div class="sngl_tstm">
						<i class="fa fa-quote-right"></i>
						<h3>VALORES</h3>
						<p><?php 
include 'conexion.php';

  
    $consultae = "SELECT * FROM acerca";
    $resultadoe = @mysql_query($consultae) or die(mysql_error());
    $datose = mysql_fetch_assoc($resultadoe);
 
     $descripcione = $datose['valores'];  

   echo "$descripcione";

 ?></p>

					</div>
				</div>


				</div>
			</div>
		</div>
		</center>
	</div>
</section>
<!-- Finaliza Nosotros -->





<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="js/vendor/jquery-1.11.2.min.js"></script>

<script src="js/isotope.pkgd.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/appear.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/showHide.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrolling-nav.js"></script>
<script src="js/plugins.js"></script>
<!-- Google Map js -->
        <script src="https://goo.gl/maps/atVRnZmfme12"></script>
		<script>
			function initialize() {
			  var mapOptions = {
				zoom: 14,
				scrollwheel: false,
				center: new google.maps.LatLng(41.092586000000000000, -75.592688599999970000)
			  };
			  var map = new google.maps.Map(document.getElementById('googleMap'),
				  mapOptions);
			  var marker = new google.maps.Marker({
				position: map.getCenter(),
				animation:google.maps.Animation.BOUNCE,
				icon: 'img/map-marker.png',
				map: map
			  });
			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
<script src="js/main.js"></script>

<script src="showHide.js" type="text/javascript"></script>

<script type="text/javascript">

$(document).ready(function(){


   $('.show_hide').showHide({
		speed: 1000,  // speed you want the toggle to happen
		easing: '',  // the animation effect you want. Remove this line if you dont want an effect and if you haven't included jQuery UI
		changeText: 1, // if you dont want the button text to change, set this to 0
		showText: 'View',// the button text to show when a div is closed
		hideText: 'Close' // the button text to show when a div is open

	});


});

</script>
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script>

<script>

  //Hide Overflow of Body on DOM Ready //
$(document).ready(function(){
    $("body").css("overflow", "hidden");
});

// Show Overflow of Body when Everything has Loaded
$(window).load(function(){
    $("body").css("overflow", "visible");
    var nice=$('html').niceScroll({
	cursorborder:"5",
	cursorcolor:"#00AFF0",
	cursorwidth:"3px",
	boxzoom:true,
	autohidemode:true
	});

});
</script>



    </body>
</html>
