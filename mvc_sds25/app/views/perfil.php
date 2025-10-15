<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/mvc_sds25/public/css/styles.css">
    <link rel="stylesheet" href="/mvc_sds25/public/css/perfil.css">
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

        <h1><?= $mensaje ?></h1>

        <div class="img-perfil">
            <img src="/mvc_sds25/public/img/perfil.jpeg" alt="Foto de Perfil">
        </div>
        <h1><?= $nombre ?></h1>
        <h2><?= $profesion ?></h2>
        <h3>Carnet: <?= $carnet ?></h3>
        <p><?= $asignatura ?></p>

        <footer class="footer">
            <div class="footer-content">
                <p>&copy; 2025 Semana de Sistemas | UES FMO</p>
                <a href="#">Volver arriba ↑</a>
            </div>
        </footer>
    </div>
</body>
</html>