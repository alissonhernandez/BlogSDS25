<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/mvc_sds25/public/css/styles.css">
    <title><?= $title ?></title>
</head>
<body>
    <nav>
        <a href="/mvc_sds25/public/">Home</a>
        <a href="/mvc_sds25/public/dia1">Dia 1</a>
        <a href="/mvc_sds25/public/dia2">Dia 2</a>
        <a href="/mvc_sds25/public/dia3">Dia 3</a>
        <a href="/mvc_sds25/public/dia4">Dia 4</a>
        <a href="/mvc_sds25/public/dia5">Dia 5</a>
        <a href="/mvc_sds25/public/perfil">Perfil</a>
        <a href="/mvc_sds25/public/visitas">Visitas</a>
    </nav>
    <div class="container">
        <h1>Agenda día 5 - Juego de Bingo, Entrega de Diplomas y Torneo de Videojuegos</h1>

        <h1><?= $mensaje ?></h1>
        <div class="img-container">
            <img src="/mvc_sds25/public/img/bingo/dia5.jpeg" alt="Foto dia 5">
        </div>

        <h2><?= $bingo ?></h2>
        <div class="img-container">
            <img src="/mvc_sds25/public/img/bingo/bingo.jpeg" alt="Juego de bingo">
        </div>

        <p><?= $juego ?></p>

        <p><?= $pagina ?></p>
        <div style="text-align: center;">
            <video width="640" height="360" controls>
                <source src="/mvc_sds25/public/video/juegobingo.mp4" type="video/mp4">
                Tu navegador no soporta el elemento de video
            </video>
        </div>

        <h2><?= $galeria ?></h2>
        <div class="gallery">
            <img src="/mvc_sds25/public/img/bingo/bingo1.jpeg">
            <img src="/mvc_sds25/public/img/bingo/bingo2.jpeg">
            <img src="/mvc_sds25/public/img/bingo/bingo3.jpeg">
            <img src="/mvc_sds25/public/img/bingo/bingo4.jpeg">
            <img src="/mvc_sds25/public/img/bingo/bingo5.jpeg">
            <img src="/mvc_sds25/public/img/bingo/bingo6.jpeg">
            <img src="/mvc_sds25/public/img/bingo/bingo7.jpeg">
            <img src="/mvc_sds25/public/img/bingo/bingo8.jpeg">
            <img src="/mvc_sds25/public/img/bingo/bingo9.jpeg">
            <img src="/mvc_sds25/public/img/bingo/bingo10.jpeg">
        </div>

        <h2><?= $diplomas ?></h2>
        <div class="img-container">
            <img src="/mvc_sds25/public/img/diplomas/diplomas.jpeg" alt="Entrega de diplomas">
        </div>

        <p><?= $entrega ?></p>
        <div class="gallery">
            <img src="/mvc_sds25/public/img/diplomas/diplomas1.jpeg">
            <img src="/mvc_sds25/public/img/diplomas/diplomas2.jpeg">
            <img src="/mvc_sds25/public/img/diplomas/diplomas3.jpeg">
        </div>

        <h2><?= $videojuegos ?></h2>
        <div class="img-container">
            <img src="/mvc_sds25/public/img/videojuegos/crportada.jpeg" alt="Torneo Clash Royale">
        </div>

        <h3><?= $cr ?></h3>
        <p><?= $torneo ?></p>
        <div class="gallery">
            <img src="/mvc_sds25/public/img/videojuegos/cr1.jpeg">
            <img src="/mvc_sds25/public/img/videojuegos/cr2.jpeg">
            <img src="/mvc_sds25/public/img/videojuegos/cr3.jpeg">
            <img src="/mvc_sds25/public/img/videojuegos/cr4.jpeg">
            <img src="/mvc_sds25/public/img/videojuegos/cr5.jpeg">
            <img src="/mvc_sds25/public/img/videojuegos/cr6.jpeg">
        </div>

        <h2><?= $fiesta ?></h2>
        <div style="text-align: center;">
            <video width="300" height="360" controls>
                <source src="/mvc_sds25/public/video/hallofuture.mp4" type="video/mp4">
                Tu navegador no soporta el elemento de video
            </video>
        </div>

        <p><?= $celebracion ?></p>
        <div style="text-align: center;">
            <video width="300" height="360" controls>
                <source src="/mvc_sds25/public/video/halloween.mp4" type="video/mp4">
                Tu navegador no soporta el elemento de video
            </video>
        </div>

        <h3><?= $realizado ?></h3>

        
        <footer class="footer">
            <div class="footer-content">
                <p>&copy; 2025 Semana de Sistemas | UES FMO</p>
                <a href="#">Volver arriba ↑</a>
            </div>
        </footer>
    </div>
</body>
</html>
