<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Little Wiki</title>
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
                    <li class="item_nav"><a href="#" class="link_nav">Temporadas</a></li>
                    <li class="item_nav"><a href="#" class="link_nav">Películas</a></li>
                    <li class="item_nav"><a href="#" class="link_nav">Canciones</a></li>
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
                    <img src="img/banner_mlp.jpg" alt="Personajes My Little Pony">
                </div>
                <p class= "parrafo1"><u>¡Gracias por interesarte en nuestro contenido!</u></p>
                <p class= "parrafo2">Veremos información sobre la serie, las películas, los personajes principales e incluso las canciones.</p>
                <p class= "parrafo3">Habrá enlaces que dirijan hacia dónde ver <br> cada temporada.</p>
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
        <h2 class="sesion">Inicia Sesion</h2>
        <form action="">
            <p>Correo electrónico</p>
            <input type="text" placeholder="mylittlewiki@gmail.com" class="form"> 
            <p>Contraseña</p>
            <input type="text" placeholder="*************" class="form">
        </form>
        <button class="ingresa"> Ingresa </button>
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
