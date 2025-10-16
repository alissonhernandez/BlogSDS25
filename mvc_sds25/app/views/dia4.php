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
        <h1>Agenda día 4 - Feria de Logros y Comelona de Pupusas</h1>

        <h1><?= $mensaje ?></h1>

        <div class="img-container">
            <img src="/mvc_sds25/public/img/feria/portada.jpeg" alt="Feria de logros">
        </div>
        <h2><?= $feria ?></h2>

        <p><?= $info ?></p>
        <div class="img-container">
            <img src="/mvc_sds25/public/img/feria/proyectos.jpeg" alt="Proyecto">
        </div>

        <h2><?= $galeria ?></h2>
        <div class="gallery">
            <img src="/mvc_sds25/public/img/feria/feria1.jpeg">
            <img src="/mvc_sds25/public/img/feria/feria2.jpeg">
            <img src="/mvc_sds25/public/img/feria/feria3.jpeg">
            <img src="/mvc_sds25/public/img/feria/feria4.jpeg">
            <img src="/mvc_sds25/public/img/feria/feria5.jpeg">
            <img src="/mvc_sds25/public/img/feria/feria6.jpeg">
            <img src="/mvc_sds25/public/img/feria/feria7.jpeg">
            <img src="/mvc_sds25/public/img/feria/feria8.jpeg">
            <img src="/mvc_sds25/public/img/feria/feria9.jpeg">
            <img src="/mvc_sds25/public/img/feria/feria10.jpeg">
            <img src="/mvc_sds25/public/img/feria/feria11.jpeg">
        </div>

        <h2><?= $stands ?></h2>

        <p><?= $proyectos ?></p>

        <div class="gallery">
            <img src="/mvc_sds25/public/img/stands/stand1.jpeg">
            <img src="/mvc_sds25/public/img/stands/stand2.jpeg">
            <img src="/mvc_sds25/public/img/stands/stand3.jpeg">
            <img src="/mvc_sds25/public/img/stands/stand4.jpeg">
            <img src="/mvc_sds25/public/img/stands/stand5.jpeg">
            <img src="/mvc_sds25/public/img/stands/stand6.jpeg">
            <img src="/mvc_sds25/public/img/stands/stand7.jpeg">
            <img src="/mvc_sds25/public/img/stands/stand8.jpeg">
            <img src="/mvc_sds25/public/img/stands/stand9.jpeg">
            <img src="/mvc_sds25/public/img/stands/stand10.jpeg">
            <img src="/mvc_sds25/public/img/stands/stand11.jpeg">
            <img src="/mvc_sds25/public/img/stands/stand12.jpeg">
            <img src="/mvc_sds25/public/img/stands/stand13.jpeg">
        </div>

        <h2><?= $texto ?></h2>
        <div style="text-align: center;">
            <video width="640" height="360" controls>
                <source src="/mvc_sds25/public/video/feria.mp4" type="video/mp4">
                Tu navegador no soporta el elemento de video
            </video>
        </div>

        <p><?= $popularidad ?></p>
        <div class="img-container">
            <img src="/mvc_sds25/public/img/stands/stand3.jpeg" alt="Blog TSI">
        </div>

        <h3><?= $ganadores ?></h3>

        <p><?= $radar ?></p>
        <div class="img-container">
            <img src="/mvc_sds25/public/img/stands/stand10.jpeg" alt="Radar de Moises">
        </div>

        <p><?= $cubo ?></p>
        <div class="img-container">
            <img src="/mvc_sds25/public/img/stands/stand6.jpeg" alt="Biblioteca CUBO">
        </div>

        <h2><?= $pupusas ?></h2>
        <div style="text-align: center;">
            <video width="640" height="360" controls>
                <source src="/mvc_sds25/public/video/pupusas.mp4" type="video/mp4">
                Tu navegador no soporta el elemento de video
            </video>
        </div>

        <p><?= $descripcion ?></p>
        <div class="gallery">
            <img src="/mvc_sds25/public/img/pupusas/pupusas1.jpeg">
            <img src="/mvc_sds25/public/img/pupusas/pupusas2.jpeg">
        </div>

        <p><?= $ganador ?></p>
        <div style="text-align: center;">
            <video width="640" height="360" controls>
                <source src="/mvc_sds25/public/video/ganadorespupusas.mp4" type="video/mp4">
                Tu navegador no soporta el elemento de video
            </video>
        </div>

        <p><?= $foto ?></p>
        <div class="img-container">
            <img src="/mvc_sds25/public/img/pupusas/findia4.jpeg" alt="Foto grupal">
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
