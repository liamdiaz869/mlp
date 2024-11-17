<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Little Wiki</title>
        <link rel="icon" href="img/My-Little-Pony-Logo-2021-500x293.webp" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="fondo_form">
<style>
        body{
            cursor: url('img/cursor2.png'), auto;
            
        }
        button:hover, a:hover, input:hover{ 
            cursor: url('img/grab.png'), auto;}
    </style>
<div class="agregar">
        <h2 class="sesion">Subir temporada</h2>
        <form action="altas.php" method="POST">
            <p class="text-mo">Temporada</p>
            <input type="text" placeholder="1,2,3,4..." class="form" name="tempo"> 
            <p class="text-mo">Inicio</p>
            <input type="text" placeholder="0000-00-00" class="form" name="inicio">
            <p class="text-mo">Final</p>
            <input type="text" placeholder="0000-00-00" class="form" name="final">
            <input class="agregar-btn" type="submit" value="Agregar"></in><br><br>
        </form>
            
        <a class="agregar-text" href="temp.php">Volver</a>
            </div>
</body>
</html>