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
        <h1>Agenda día 1 - Bienvenida, Ponencias y Hackathon</h1>
        <h1><?= $mensaje ?></h1>
    <div class="img-container">
        <img src="/mvc_sds25/public/img/bienvenida/grupo.jpeg" alt="Foto en grupo">
    </div>
    <h2><?= $agenda1 ?></h2>
    <div class="img-container">
        <img src="/mvc_sds25/public/img/bienvenida/cesarfranco.jpeg" alt="Ing. Franco">
    </div>
    <h3><?= $agenda2 ?></h3>
    <p><?= $vicedecana ?></p>
    <div class="img-container">
        <img src="/mvc_sds25/public/img/bienvenida/vicedecanafmo.jpeg" alt="Vicedecana">
    </div>
    <p><?= $joseluiscastro ?></p>
    <div class="img-container">
        <img src="/mvc_sds25/public/img/bienvenida/joseluiscastro.jpeg" alt="Ing. José Luis Castro">  
    </div>
    <p><?= $diegoherrera ?></p>
    <div class="img-container">
        <img src="/mvc_sds25/public/img/bienvenida/diegoherrera.jpeg" alt="Ing. Diego Herrera"> 
    </div>
    <p><?= $karlaorellana ?></p>
    <div class="img-container">
        <img src="/mvc_sds25/public/img/bienvenida/karlaorellana.jpeg" alt="Presidenta ASEIS">
    </div>
    <h2><?= $ponencias ?></h2>
    <h3><?= $ponencia1 ?></h3>
    <div class="img-container">
        <img src="/mvc_sds25/public/img/ponencia1/luiscontreras.jpeg" alt="MSc. Jose Luis Contreras">
    </div>
    <p><?= $bitcoin ?></p>
    <div class="gallery">
        <img src="/mvc_sds25/public/img/ponencia1/bitcoin1.jpeg">
        <img src="/mvc_sds25/public/img/ponencia1/bitcoin2.jpeg">
        <img src="/mvc_sds25/public/img/ponencia1/bitcoin3.jpeg">
        <img src="/mvc_sds25/public/img/ponencia1/bitcoin4.jpeg">
        <img src="/mvc_sds25/public/img/ponencia1/bitcoin5.jpeg">
        <img src="/mvc_sds25/public/img/ponencia1/bitcoin6.jpeg">
        <img src="/mvc_sds25/public/img/ponencia1/bitcoin7.jpeg">
        <img src="/mvc_sds25/public/img/ponencia1/bitcoin8.jpeg">
        <img src="/mvc_sds25/public/img/ponencia1/bitcoin9.jpeg">
        <img src="/mvc_sds25/public/img/ponencia1/bitcoin10.jpeg">
    </div>
    <h3><?= $ponencia2 ?></h3>
    <div class="img-container">
        <img src="/mvc_sds25/public/img/ponencia2/rodrigopineda.jpeg" alt="MSc. Rodrigo Pineda">
    </div>
    <p><?= $IAG ?></p>
    <div class="gallery">
        <img src="/mvc_sds25/public/img/ponencia2/iag1.jpeg">
        <img src="/mvc_sds25/public/img/ponencia2/iag2.jpeg">
        <img src="/mvc_sds25/public/img/ponencia2/iag3.jpeg">
        <img src="/mvc_sds25/public/img/ponencia2/iag4.jpeg">
        <img src="/mvc_sds25/public/img/ponencia2/iag5.jpeg">
        <img src="/mvc_sds25/public/img/ponencia2/iag6.jpeg">
        <img src="/mvc_sds25/public/img/ponencia2/iag7.jpeg">
        <img src="/mvc_sds25/public/img/ponencia2/iag8.jpeg">
        <img src="/mvc_sds25/public/img/ponencia2/iag9.jpeg">
        <img src="/mvc_sds25/public/img/ponencia2/iag10.jpeg">
    </div>
    <h2><?= $agenda3 ?></h2>
    <h3><?= $hackathon ?></h3>
    <div class="gallery">
        <img src="/mvc_sds25/public/img/hackathon/hkt1.jpeg">
        <img src="/mvc_sds25/public/img/hackathon/hkt2.jpeg">
        <img src="/mvc_sds25/public/img/hackathon/hkt3.jpeg">
        <img src="/mvc_sds25/public/img/hackathon/hkt4.jpeg">
        <img src="/mvc_sds25/public/img/hackathon/hkt5.jpeg">
        <img src="/mvc_sds25/public/img/hackathon/hkt6.jpeg">
        <img src="/mvc_sds25/public/img/hackathon/hkt7.jpeg">
        <img src="/mvc_sds25/public/img/hackathon/hkt8.jpeg">
        <img src="/mvc_sds25/public/img/hackathon/hkt9.jpeg">
        <img src="/mvc_sds25/public/img/hackathon/hkt10.jpeg">
    </div>
    <h3><?= $ganadores ?></h3>
    <div style="text-align: center;">
        <video width="640" height="360" controls>
            <source src="/mvc_sds25/public/video/ganadores.mp4" type="video/mp4">
            Tu navegador no soporta el elemento de video
        </video>
    </div>
    <h2><?= $findia1 ?></h2>
    <div class="img-container">
        <img src="/mvc_sds25/public/img/hackathon/banderines.jpeg" alt="trabajobanderines">
    </div>
    <h3><?= $realizado ?></h3>
    <div class="img-container">
        <img src="/mvc_sds25/public/img/hackathon/alisson.jpeg" alt="Alisson Hernandez">
    </div>
</div>
</body>
</html>
