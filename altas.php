<?php 

$temporada = $_POST['tempo'];
$inicio = $_POST['inicio'];
$final = $_POST['final'];


$servidor = "localhost";
$usuario = "root";
$clave = "";
$base = "mlp";


$ResConec = mysqli_connect($servidor,$usuario,$clave,$base);


$cadena = "INSERT INTO temporadas(`inicio`, `final`, `temporada`) VALUES ('$inicio', '$final', '$temporada')";

$ResConsIns = mysqli_query( $ResConec , $cadena );
header("Location: temp.php");
?>

