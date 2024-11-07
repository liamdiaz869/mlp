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
            <h1>Pinkamena Diane Pie "Pinkie Pie"</h1>
            <div class="personaje-contenedor">
                <div class="personajes">
                    <img src="img/PinkiePie.webp" alt="rarity">
                </div>
                <div class="texto">
                    <p><strong>Nombre:</strong> Pinkamena Diane Pie "Pinkie Pie" <br> 
                       <strong>Elemento de la armonía:</strong> Risa <br>
                       <strong>Ocupación:</strong> Repostera y organizadora de fiestas <br>
                       <strong>Vive en:</strong> Sugarcube Corner - Ponyville <br>
                       <strong>Tipo de pony:</strong> Terrestre </p>
                </div>
                
            </div>
            <p class="personajes_text">
            Pinkie Pie es una poni terrestre que se aloja en el pueblo de Ponyville y es uno de los personajes principales en My Little Pony: La Magia de la Amistad y representa el Elemento de la Risa. "Pinkie Pie" significa en español "Pastel Rosita" literalmente traducido, pero hay personas que lo traducen como "Pastelito Rosa" o "Pastel Rosado". Su nombre completo dicho por su madre en Crónicas de la Amistad es Pinkamena Diane Pie. Vive en Sugarcube Corner, lugar en donde trabaja como pastelera, ayudando al Sr. y Sra. Cake con su trabajo, cuida de los bebés Pumpkin Cake y Pound Cake, desde el capítulo Los Bebés Cake, y haciendo fiestas para los ponis de Ponyville.
            </p>
            <div class="personajes-relacionados">
    <p>Personajes relacionados:</p>
    <div class="relacionados">
        <div class="personaje">
            <img src="img/img_pinkie1.jpg" alt="pinkie">
            <p>Pinkie Pie</p>
        </div>
        <div class="personaje">
            <img src="img/img_pinkie1.jpg" alt="pinkie">
            <p>Pinkie Pie</p>
        </div>
    </div>
</div>
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
