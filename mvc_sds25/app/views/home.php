<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/mvc_sds25/public/css/home.css">
    <title><?= $title ?></title>
</head>
<body>
    <div class="wrapper">
        <div class="left-side"></div>

        <div class="right-side">
            <nav>
                <a href="/mvc_sds25/public/">Home</a>
                <a href="/mvc_sds25/public/dia1">Dia 1</a>
                <a href="/mvc_sds25/public/dia2">Dia 2</a>
            </nav>

            <h1><?= $proyecto ?></h1>
            <p><?= $descripcion ?></p>

            <h1><?= $SDS25 ?></h1>
            <p><?= $concepto ?></p>

            <p><?= $realizado ?></p>
        </div>
    </div>
</body>
</html>
