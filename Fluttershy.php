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
            <h1>Fluttershy</h1>
            <div class="personaje-contenedor">
                <div class="personajes">
                    <img src="img/flutter.webp" alt="rarity">
                </div>
                <div class="texto">
                    <p><strong>Nombre:</strong> Fluttershy <br> 
                       <strong>Elemento de la armonía:</strong> Amabilidad <br>
                       <strong>Ocupación:</strong> Cuidadora de animales <br>
                       <strong>Vive en:</strong> Afueras de ponyville <br>
                       <strong>Tipo de pony:</strong> Pegaso 
                    </p>
                </div>
                
            </div>
            <p class="personajes_text">
            Fluttershy es una poni pegaso y una de los personajes principales de My Little Pony: La Magia de la Amistad. Ella vive en una pequeña cabaña cerca del Bosque Everfree y es una cuidadora y amante de los animales, el más prominente de sus cargos siendo Angel el conejo. Ella representa el elemento de la Bondad/Amabilidad. Su nombre significa: Aleteo Tímido.
            </p>
            <p class="personajes_text">Los episodios Crónicas de la Amistad y Fluttershy al Máximo nos ofrecen vistazos acerca del pasado de Fluttershy. Igual que Rainbow Dash, Fluttershy proviene de Cloudsdale. Cuando era una potra, ella era una débil voladora, y era acosada por los mismos pegasos que se burlaron de Rainbow Dash en La Rain-plosión Sónica, la terminaron apodando "Klutzershy" (traducido literalmente como "Torpe Tímida"). Ella era más alta y desgarbada que la mayoría de potros, algo parecido a Plaid Stripes, Pearly Whites, Thunderstruck, la potra Pear Butter, la potra Applejack, la potra Derpy, y Crystal Hoof, y tenía alas ligeramente más largas. Rainbow Dash intervino para defenderla, y desafió a los bullies a una carrera. Cuando la carrera empezó, los participantes derribaron accidentalmente a Fluttershy fuera de las nubes, provocando que cayera directamente hacia el suelo, un lugar en el que nunca había estado o visto. Se salvó de estrellarse gracias a un enjambre de mariposas que pasaba por allí.
            </p>
            <p class="personajes_text">
            Luego de ver la belleza de los animales y el verdor que había allí, se emociona y empieza a cantar, unos momentos más tarde, la rain-plosión sónica de Rainbow Dash atemoriza a los animales y los obliga a esconderse. Fluttershy adquiere su cutie mark luego de reconfortar a los animales y darse cuenta de su habilidad para hablar con ellos, identificando su conexión especial con los animales.</p>
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
