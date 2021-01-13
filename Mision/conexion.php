<?php 
 $conectar=@mysql_connect('localhost','root','');
  //verificamos la conexion
  if(!$conectar){
    echo"No Se Pudo Conectar Con El Servidor";
  }else{

    $base=mysql_select_db('emiliani');
    if(!$base){
      echo"No Se Encontro La Base De Datos";      
    }
  }
 ?>