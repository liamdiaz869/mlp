<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my little wiki</title>
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
    </header>
<main>
    <div class="content-container">
        <div class="sidebar-left">
            <a href="Twilight.php">
                <img src="img/img_twilight.jpg" alt="personaje 1">
            </a>
            <a href="PinkiePie.php">
                <img src="img/img_pinkie.jpg" alt="personaje 2">
            </a>
            <a href="Rarity.php">
                <img src="img/img_rarity.jpg" alt="personaje 3">
            </a>
            <a href="Fluttershy.php">
                <img src="img/img_fluttershy.jpg" alt="personaje 4">
            </a>
            <a href="RainbowDash.php">
                <img src="img/img_rainbow.jpg" alt="personaje 5">
            </a>
            <a href="AppleJack.php">
                <img src="img/img_applejack.jpg" alt="personaje 6">
            </a>
        </div>

        <section class="main-content">
            <h1>Rainbow Dash</h1>
            <div class="personaje-contenedor">
                <div class="personajes">
                    <img src="img/rainbow.webp" alt="rarity">
                </div>
                <div class="texto">
                    <p><strong>Nombre:</strong> Rainbow Dash <br> 
                       <strong>Elemento de la armonía:</strong> Lealtad <br>
                       <strong>Ocupación:</strong> Wonderbolt <br>
                       <strong>Vive en:</strong> Cloudsdale <br>
                       <strong>Tipo de pony:</strong> Pegaso 
                    </p>
                </div>
                
            </div>
            <p class="personajes_text">
            Rainbow Dash, es una poni pegaso y una de las personajes principales de My Little Pony: La Magia de la Amistad ya que aparece casi en todos los capítulos. Su trabajo es despejar el cielo de Ponyville. Ella es una fanática de Los Wonderbolts, y su gran sueño es pertenecer a ese grupo de élite algún día, sueño que se cumplió en Dash La Novata. En La Rain-plosión Sónica tanto Rarity como la Princesa Celestia, la declaran la mejor voladora de toda Equestria ya que muestra un gran valor por la lealtad, pues por lo cual demuestra optimismo. Representa el Elemento de la Lealtad. Ella fue la última de entre las seis personajes principales en conseguir una mascota, la suya es una tortuga mascota llamada Tanque, que fue presentada y domesticada por Rainbow en ¡Que Gane la Mejor Mascota!.
            </p>
            <p class="personajes_text">
            Rainbow Dash aparece por primera vez en La Magia de la Amistad, Parte 1, donde ella accidentalmente choca contra Twilight Sparkle y la envía hacia un charco de lodo. Durante el intercambio que siguió se conocen por primera vez entre sí. Rainbow Dash, más tarde, se une a Twilight y otras cuatro ponis en La Magia de la Amistad, Parte 2 en su búsqueda de los Elementos de la Armonía. En mitad del viaje, Nightmare Moon intenta detenerlas al tomar la forma de Los Shadowbolts, una imitación del equipo acrobático favorito de Rainbow, y usarlos para persuadir a Rainbow a que abandone a sus amigas. Sin embargo, fallan ya que ella rechaza sus ofertas de fama y poder para ayudar a sus amigas y continuar con la búsqueda. Fue por este acto que ella se ganó el control sobre el Elemento de la Lealtad.
            </p>
            
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
