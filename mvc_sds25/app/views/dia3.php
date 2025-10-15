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
        <h1>Agenda día 3 - Torneo de Fútbol Cancelado</h1>

        <h1><?= $mensaje ?></h1>

        <h2><?= $ues ?></h2>
        <div class="img-container">
            <img src="/mvc_sds25/public/img/futbol/ues.jpeg" alt="UES Anuncio">
        </div>

        <p><?= $cancelado ?></p>
        <div class="img-container">
            <img src="/mvc_sds25/public/img/futbol/torneo.jpeg" alt="Torneo Cancelado">
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
