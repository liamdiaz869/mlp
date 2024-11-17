<?php 

$temporada = $_POST['tempo'];

$servidor = "localhost";
$usuario = "root";
$clave = "";
$base = "mlp";

$ResConec = mysqli_connect($servidor,$usuario,$clave,$base);


$cadena = "DELETE FROM temporadas WHERE temporada = '$temporada'";


$ResConsDel = MySqli_query( $ResConec , $cadena );


$FilasAfectadas = Mysqli_affected_rows($ResConec);

header("Location: temp.php");

?>