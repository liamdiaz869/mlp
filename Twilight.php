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
<style>
        body{
            cursor: url('img/cursor2.png'), auto;
            
        }
        button:hover, a:hover{ 
            cursor: url('img/grab.png'), auto;}
    </style>
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
            <h1>Twilight Sparkle</h1>
            <div class="personaje-contenedor">
                <div class="personajes">
                    <img src="img/twili.webp" alt="rarity">
                </div>
                <div class="texto">
                    <p><strong>Nombre:</strong> Twilight Sparkle <br> 
                       <strong>Elemento de la armonía:</strong> Magia <br>
                       <strong>Ocupación:</strong> Monarca de Equestria <br>
                       <strong>Vive en:</strong> Castillo de Twilight - Ponyville <br>
                       <strong>Tipo de pony:</strong> Alicornio 
                    </p>
                </div>
                
            </div>
            <p class="personajes_text">
            La Princesa Twilight Sparkle es el personaje principal de My Little Pony: La Magia de la Amistad, representa el Elemento de la Magia. Inicialmente era un unicornio hasta Cura Mágica y Misteriosa donde se transformó en princesa alicornio. Sus familiares conocidos son Twilight Velvet y Night Light, sus padres; su hermano, Shining Armor; su cuñada la Princesa Cadance quien también fue su niñera y Flurry Heart, su recién nacida sobrina. Al inicio de la serie vivía en Canterlot junto con Spike, su mejor amigo y asistente, bajo la tutela de la Princesa Celestia, sin embargo se mudó a Ponyville en el episodio La Magia de la Amistad, Parte 2, porque no quería abandonar a sus amigas. Solía alojarse en la biblioteca aunque actualmente tiene su propio castillo.
            </p>
            <p class="personajes_text">
            Al inicio de la serie, ella y Spike, su mejor amigo y asistente, se mudan de Canterlot a la biblioteca Golden Oak en Ponyville para estudiar la magia de la amistad, y en El Reino de Twilight, Parte 2, consigue su propio castillo: el Castillo de Amistad y gana el título de "Princesa de la Amistad". Twilight Sparkle representa el elemento de la magia.
            </p>
            <p class="personajes_text">Antes de convertirse en princesa, regularmente envía informes de amistad a la princesa Celestia. En El Bùho de la Discordia, Twilight adopta un buho llamado Owlowiscious. A partir de The Last Problem, ella es la gobernante de Equestria.</p>
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
