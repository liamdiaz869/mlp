<?php 	

$servidor = "localhost";
$usuario = "root";
$clave = "";
$base = "mlp";


$email = $_POST['ema'];
$Clave = $_POST['clav'];

$conexion = mysqli_connect("localhost","root","","mlp");
$cadena = "SELECT * FROM user WHERE Email='$email' AND Password='$Clave'";
$Consulta = mysqli_query($conexion,$cadena);
$Lineas = mysqli_num_rows( $Consulta );



?>