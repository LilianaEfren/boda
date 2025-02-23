<!DOCTYPE html>
<?php require "data.php" ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invitación</title>
  <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Alex+Brush&family=Allura&family=Sacramento&family=Parisienne&family=Merienda&display=swap" rel="stylesheet">
    <!-- Enlace a Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!--ICONS-->
    <link rel="stylesheet" href="Iconos/icons.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
          crossorigin="anonymous">
</head>
</head>

<body>
    <div class="contenido">
        <?php foreach ($post1 as $p): ?>
            <div class="post1">
                <p class="titulo"><?= $p["titulo"] ?></p>
                <h1 class="descripcion"><?= $p["descripcion"] ?></h1>
                <p class="fecha"><?= $p["fecha"] ?></p>
            </div>
            <img class="media1" src=<?= $p["img"] ?>>
        <?php endforeach; ?>
    </div>

    <div class="contenido">
        <?php foreach ($posts as $p): ?>
            <div class="post">
                <h1 class="titulos" style="font-size: 35px"><?= $p["titulo"] ?></h1>
                <h2 class="titulos"><?= $p["hora"] ?></h2>
                <p>
                    <a href="<?= $p["link-ubi"] ?>" target="_blank"><i class="fa-solid fa-location-dot" style="font-size: 55px; color: black;" ></i></a>
                </p>
                <p class="titulos" style="font-size: 21px"><?= $p["descripcion"] ?></p>
                <div class="anillo">
                    <h1>Un nuevo capítulo en nuestras vidas que queremos celebrar contigo.</h1>
                </div>
                <img class="media" src=<?= $p["img"] ?>>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="contenido">
        <?php foreach ($post3 as $p): ?>
            <div class="post">
                <h1 class="titulos"><?= $p["titulo"] ?></h1>
                <h2 class="titulos"><?= $p["hora"] ?></h2>
                <p><a href="<?= $p["link-ubi"] ?>" target="_blank"><i class="fa-solid fa-location-dot" style="font-size: 55px; color: black;" ></i></a></p>
                <p class="titulos" style="font-size: 21px"><?= $p["descripcion"] ?></p>
                <div class="countdown" id="countdown">
                    <!-- Aquí se mostrará la cuenta regresiva -->
                </div>
                <!-- Footer con la marca registrada -->
                <footer class="footer">
                    <hr style="color: #eebf97">
                    <ul class="icons">
                        <small>© 2025 Yara Fernanda</small>
                        <li><a href="https://wa.me/qr/SWYNXIFWW43JD1" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                        <li><a href="https://www.facebook.com/profile.php?id=100009949994150" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/yaferjg/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </footer>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>

<style>
    body {
        margin: 0;
        padding: 0;
        width: 100%;
        font-family: 'Arial', sans-serif;
        background-color: #f0f0f0;
    }

    .contenido {
        width: 100%;
        text-align: center;
        position: relative;
    }
    .post1 h1 {
        font-family: 'Great Vibes', cursive;
        font-weight: normal;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9);
    }

    .post1 {
        position: absolute; /* Esto coloca el div sobre la imagen */
        top: 50%;
        left: 50%; /* Centra horizontalmente */
        color: white;
        font-size: 24px;
        padding: 10px;

        opacity: 0; /* Empezamos con opacidad 0 */
        transform: translateY(30px); /* Empezamos 30px abajo */
        transition: opacity 0.6s ease, transform 0.6s ease; /* Transición suave */
    }

    /* Clase para cuando el contenido entra en vista */
    .post1.visible {
        opacity: 1; /* Hace visible el contenido */
        transform: translateY(0); /* Mueve el contenido a su posición original */
    }


    .media1 {
        width: 100%;
        height: 100%; /* Make the height responsive */
        background-size: cover;
        background-repeat: no-repeat;
    }

    .post {
        position: relative; /* Contenedor relativo para que los elementos absolutos se posicionen dentro de él */
        text-align: center;
    }

    .titulos {
        font-family: "Parisienne";
    }

    .media{
        width: 100%;
        height: auto; /* Make the height responsive */
        background-size: cover;
        background-repeat: no-repeat;
    }

    .anillo{
        position: absolute; /* Esto coloca el div sobre la imagen */
        top: 55%; /* Centra verticalmente */
        color: white;
        text-align: center;
        font-size: 14px;
        padding: 10px;
        z-index: 10;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);
    }

    .anillo h1{
        font-style: italic;
        font-family: 'Merienda', cursive;
    }

    .countdown {
        font-family: 'Great Vibes', cursive;
        font-size: 30px; /* Tamaño de fuente más grande */
        color: white;
        background-color: #070707; /* Fondo negro */
        display: inline-block; /* Asegura que el fondo sea solo alrededor del contador */
        padding-top: 90px;
        padding-bottom: 200px;
        text-align: center;
        margin-top: 20px;
        width: 100%;
    }

    .countdown span {
        font-size: 40px; /* Tamaño de los números más grande */
        font-weight: bold; /* Resalta los números */
        margin: 0 5px;
    }

    .countdown .label {
        font-size: 16px; /* Más pequeño para las etiquetas */
    }

    .footer {
        background-color: black; /* El mismo color de fondo que el contador */
        color: white; /* Color del texto */
        font-size: 16px;
        text-align: center;
        position: absolute; /* Para posicionarlo al final del contenedor */
        bottom: 0;
        width: 100%;
    }

    .footer small{
        padding-right: 20px;
        color: #7e5633;
    }

    .footer .icons{
        list-style: none;
        float: right;
        display: table;
        margin-right: 30px;
        margin-top: 20px;
    }

    .footer .icons li{
        display: table-cell;
        padding: 10px;
    }

    .icons i{
        font-size: 200%;
        color: #7e5633;
        padding: 3%;
    }

    .icons i:hover{
        color: #eebf97;
        transform: scale(1.2); /* Aumenta el tamaño un 20% */
        transition: transform 0.3s ease-in-out; /* Agrega una animación suave */
    }

    @keyframes fadeIn {
        0% { opacity: 0; transform: translateY(-30px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeInText {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }
</style>

<script>
    // Detecta el desplazamiento de la página
    window.addEventListener('scroll', function() {
        const posts = document.querySelectorAll('.post1');

        // Para cada post1, verifica si está visible en la pantalla
        posts.forEach(post => {
            const rect = post.getBoundingClientRect();
            if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
                post.classList.add('visible'); // Agrega la clase 'visible' cuando el post está en vista
            }
        });
    });
</script>

<script>
    // Script para la cuenta regresiva
    (function() {
        const eventDate = new Date('2025-04-26T16:30:00');
        const countdownElement = document.getElementById('countdown');

        function updateCountdown() {
            const now = new Date();
            const timeDifference = eventDate - now;

            if (timeDifference <= 0) {
                countdownElement.innerHTML = '¡La boda ha comenzado!';
                return;
            }

            const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

            countdownElement.innerHTML = `
                    ${days} Días ${hours} Horas ${minutes} Minutos ${seconds} Segundos
                `;
        }

        updateCountdown();
        setInterval(updateCountdown, 1000);
    })();
</script>
