<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Little Wiki</title>
        <link rel="icon" href="img/My-Little-Pony-Logo-2021-500x293.webp" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="fondo_pag">
    <header>
        <div class="header-container">
            <a href="index.php">
                <img src="img/my-little-pony-logo-2021-500x293.webp" class="logo_mlp" alt="my little pony logo">
            </a>
            <nav>
                <ul class="nav-list">
                    <li class="item_nav"><a href="index.php" class="link_nav">Inicio</a></li>
                    <li class="item_nav"><a href="temp.php" class="link_nav">Temporadas</a></li>
                </ul>
            </nav>
            <button class="button_perfil" id="abrirModal"><img src="img/img_perfil.jpg" class="img_perfil " alt="Imagen de perfil"></button>
        </div>
    </header>

    <main>
        <div class="content-container">
            <div class="sidebar-left">
                <a href="Twilight.php">
                    <img src="img/img_twilight.jpg" alt="Personaje 1">
                </a>
                <a href="PinkiePie.php">
                    <img src="img/img_pinkie.jpg" alt="Personaje 2">
                </a>
                <a href="Rarity.php">
                    <img src="img/img_rarity.jpg" alt="Personaje 3">
                </a>
                <a href="Fluttershy.php">
                    <img src="img/img_fluttershy.jpg" alt="Personaje 4">
                </a>
                <a href="RainbowDash.php">
                    <img src="img/img_rainbow.jpg" alt="Personaje 5">
                </a>
                <a href="AppleJack.php">
                    <img src="img/img_applejack.jpg" alt="Personaje 6">
                </a>
            </div>

            <section class="main-content">
                <h1>Inicio</h1>
                <div class="characters-banner">
                    <img src="img/banner_mlp.jpg" class="banner" alt="Personajes My Little Pony">
                </div>
                <p class= "parrafo1"><u>¡Gracias por interesarte en nuestro contenido!</u></p>
                <p class= "parrafo2">My Little Pony: La Magia de la Amistad es una serie animada que salió al aire en el canal de televisión The Hub y actualmente es emitida por el canal Discovery Family. El show se estrenó el 10 de octubre del 2010, y concluyó con su novena temporada el 12 de octubre del 2019. Esta es la generación número cuatro de la popular franquicia de Hasbro, My Little Pony, referida como la cuarta generación o G4 (Generación 4), de My Little Pony. </p>
                <p class= "parrafo3">La serie es protagonizada por una poni unicornio llamada Twilight Sparkle, discípula de la Princesa Celestia que es la gobernante de la tierra mágica de Equestria. Viendo a la joven poni sumida en sus libros, la princesa le encomienda la misión de hacer amigos en Ponyville y le envía a un asistente, un joven dragón llamado Spike. <br>
                <p class= "parrafo4">¡También dejaremos un par de noticias de esta serie que podrían interesarte!</p>
            </section>

            <div class="sidebar-right">
                <h2>podría interesarte...</h2>
                <div class="suggestion">
                    <a href="https://www.20minutos.es/cinemania/noticias/my-little-pony-se-estrenara-finalmente-en-netflix-4583531/" target="_blanck"><img src="img/pelimlpnoti.webp" alt="pinkie"></a>
                    <p>¡ULTIMO MOMENTO!</p>
                </div>
                <div class="suggestion">
                    <a href="https://www.20minutos.es/television/rick-morty-cameo-my-little-pony-45362/" target="_blanck"><img src="img/mlprick.webp" alt="titulo 2"></a>
                    <p>¡ULTIMO MOMENTO!</p>
                </div>
                <div class="suggestion">
                    <a href="https://ramenparados.com/publicado-el-primer-capitulo-del-manga/" target="_blanck"><img src="img/normal_lttile-pony.jpg" alt="titulo 3"></a>
                    <p>¡ULTIMO MOMENTO!</p>
                </div>
            </div>
        </div>


        <div id="ventanaModal" class="modal">
    <div class="contenido-modal">
        <span class="cerrar">&times;</span>
        <h2 class="sesion">Inicia Sesión</h2>


        <form action="login.php" method="POST">
            <p class="text-mo">Correo electrónico</p>
            <input type="text" placeholder="mylittlewiki@gmail.com" class="form" name="ema"> 
            <p class="text-mo">Contraseña</p>
            <input type="text" placeholder="*************" class="form"
            name="clav">
        </form>
            <input class="ingresa" type="submit" value="Ingresá"></in>

    </div>

  </div>
    </main> 

    <footer class="footer">
        <br>
        <p>&copy; 2024 My Little Pony. Todos los derechos reservados.</p>
    </footer>
</body>
<script src="js/modal.js"></script>
</html>

<?php 	

error_reporting(0);
$Mensaje = $_GET['error'];
echo $Mensaje;

?>