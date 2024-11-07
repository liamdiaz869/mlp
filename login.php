<?php 	


$email = $_POST['ema'];
$Clave = $_POST['clav'];

echo "el usuario ".$Usuario." tiene clave ".$Clave."<br>";

$conexion = mysqli_connect("localhost","root","","mlp");
$cadena = "SELECT * FROM user WHERE Email='$email' AND clave='$Clave'";
$Consulta = MySqli_query($conexion,$cadena);
$Lineas = Mysqli_num_rows( $Consulta );

if($Lineas==1){
	echo "el usuario existe";
	header("location:formu-altas.php");

}else{
	echo "el usuario NO existe";
	header("location:formu-login.php?error=Usuario%20inexistente");
}




?>