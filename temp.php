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
                <h1>Temporadas</h1>
                <div class="characters-banner">
                    <img src="img/banner.webp" class="banner" alt="Personajes My Little Pony">
                </div>
                <table class="table">
        <thead>
            <tr class="tr">
                <th class="th">Temporada</th>
                <th class="th">Inicio</th>
                <th class="th">Finalización</th>
            </tr>
        </thead>
        <tbody>
            <tr class="tr">
                <td class="td">Temporada 1</td>
                <td class="td">10/10/2010</td>
                <td class="td">06/05/2011</td>
            </tr>
            <tr class="tr">
                <td class="td">Temporada 2</td>
                <td class="td">17/09/2011</td>
                <td class="td">21/04/2012</td>
            </tr>
            <tr class="tr">
                <td class="td">Temporada 3</td>
                <td class="td">10/11/2012</td>
                <td class="td">16/02/2013</td>
            </tr>
            <tr class="tr">
                <td class="td">Temporada 4</td>
                <td class="td">10/10/2010</td>
                <td class="td">06/05/2011</td>
            </tr>
            <tr class="tr">
                <td class="td">Temporada 5</td>
                <td class="td">17/09/2011</td>
                <td class="td">21/04/2012</td>
            </tr>
            <tr class="tr">
                <td class="td">Temporada 6</td>
                <td class="td">10/11/2012</td>
                <td class="td">16/02/2013</td>
            </tr>
            <tr class="tr">
                <td class="td">Temporada 7</td>
                <td class="td">10/10/2010</td>
                <td class="td">06/05/2011</td>
            </tr>
            <tr class="tr">
                <td class="td">Temporada 8</td>
                <td class="td">17/09/2011</td>
                <td class="td">21/04/2012</td>
            </tr>
            <tr class="tr">
                <td class="td">Temporada 9</td>
                <td class="td">10/11/2012</td>
                <td class="td">16/02/2013</td>
            </tr>
        </tbody>
    </table>
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