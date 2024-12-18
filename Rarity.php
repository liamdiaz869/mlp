<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Little Wiki</title>
        <link rel="icon" href="img/My-Little-Pony-Logo-2021-500x293.webp" type="image/x-icon">
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
            <h1>Rarity</h1>
            <div class="personaje-contenedor">
                <div class="personajes">
                    <img src="img/img_rarity1.jpg" alt="rarity">
                </div>
                <div class="texto">
                    <p><strong>Nombre:</strong> Rarity <br> 
                       <strong>Elemento de la armonía:</strong> Generosidad <br>
                       <strong>Ocupación:</strong> Modista <br>
                       <strong>Vive en:</strong> Boutique Carrousel - Ponyville <br>
                       <strong>Tipo de pony:</strong> Unicornio 
                    </p>
                </div>
                
            </div>
            <p class="personajes_text">
                Rarity es una pony unicornio que reside en Ponyville y es una de los principales personajes de My Little Pony; La Magia de la Amistad. Su sueño es vivir en Canterlot. Destaca por su belleza, su pelo brillante y sus extraordinarios rizos de color morado. Ella es la hermana mayor de Sweetie Belle y quizás el amor platónico de Spike, ya que en el episodio Simple Ways, se ve que Spike perdió un poco el interés hacia ella. Rarity es una diseñadora de moda y como costurera en su propia tienda, Boutique del carrusel. Tiene una gata persa blanco llamada Opalescence. Ella representa el Elemento de la Generosidad. A diferencia de Twilight Sparkle, su magia se utiliza para las actividades relacionadas con su talento especial y para tareas básicas como sostener y transportar objetos o la búsqueda de piedras preciosas.
            </p>
            <p class="personajes_text">
            Cuando Rarity ve a Twilight Sparkle por primera vez, en el pabellón decorando, tan pronto como Rarity vuelve a mirar en el Twilight, expresa preocupación por la melena desordenada de ella y prácticamente hizo muchos cambios de imagen para Twilight mientras que Spike la miraba.  Rarity cuida de su propia belleza. Trata de desafiar a Trixie en Detectives Presumidos, haciéndose un vestido de la cortina de Trixie, pero Trixie toma medidadas, hasta arruinar la melena de Rarity, haciéndola estallar en lágrimas y huir. Rarity también es especial por su limpieza: ella entra en pánico mientras trataba de evitar barro en Una Noche Difícil y trata de mantenerse a sí misma de mojarse en la lluvia para evitar arruinar su melena. Esto provoca un conflicto con su amiga Applejack, que es, por el contrario, en absoluto despreocupada por conseguir húmedo o embarrado.
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
            <input class="ingresa" type="submit" value="Ingresá"></in>
        </form>
            

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
