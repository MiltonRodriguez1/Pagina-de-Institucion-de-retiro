<?php
 include "conexion.php";
$Contra = $_POST['Contra'];

   class Encrypter {
 
    private static $Key = "dublin";
 
    public static function encrypt ($input) {
        $output = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5(Encrypter::$Key), $input, MCRYPT_MODE_CBC, md5(md5(Encrypter::$Key))));
        return $output;
    }
 
    public static function decrypt ($input) {
        $output = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5(Encrypter::$Key), base64_decode($input), MCRYPT_MODE_CBC, md5(md5(Encrypter::$Key))), "\0");
        return $output;
    }
 
}




$consulta = "SELECT * FROM login";
    $resultado = @mysql_query($consulta) or die(mysql_error());
    $datos = mysql_fetch_assoc($resultado);
   // Datos binarios de la imagen.
    $tipo = $datos['contra'];
    


$texto_original = Encrypter::decrypt($datos['contra']); 
if ($Contra == $texto_original) {
setcookie("user_valido", true, time() + (86400 * 30), "/"); // 86400 = 1 day
 header('Location: admiacerca.php');
 exit();

}
else{
  

	header('Location: index.php');
        echo '<script language="javascript">alert("Area restringida");</script>'; 
}
	

   
 ?>