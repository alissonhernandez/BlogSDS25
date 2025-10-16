<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/mvc_sds25/public/css/styles.css">
    <link rel="stylesheet" href="/mvc_sds25/public/css/visitas.css">
    <script src="/mvc_sds25/public/js/mensaje.js"></script>
    <title>SDS25 - Visitas</title>
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
    <div class="visitas-container">
        <h1>Formulario de Visitas</h1>
        
        <?php if (!empty($mensaje)): ?>
            <div id="toast" class="toast <?= $tipo_mensaje ?>">
                <?= $mensaje ?>
            </div>
        <?php endif; ?>
        
        <form method="POST" action="/mvc_sds25/public/visitas/guardar">

            <label>Nombre:</label>
            <input type="text" name="nombre" required><br><br>

            <label>Correo:</label>
            <input type="email" name="correo" required><br><br>

            <label>Comentario:</label>
            <textarea name="comentario" required></textarea><br><br>
            
            <button type="submit">Guardar Visita</button>
        </form>
        
        <h2>Lista de visitas</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Comentario</th>
                <th>Fecha</th>
            </tr>
            
            <?php foreach($visitas as $v): ?>
                <tr>
                    <td><?= $v["id"] ?></td>
                    <td><?= htmlspecialchars($v["nombre"]) ?></td>
                    <td><?= htmlspecialchars($v["correo"]) ?></td>
                    <td><?= htmlspecialchars($v["comentario"]) ?></td>
                    <td><?= $v["fecha_visita"] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <footer class="footer">
            <div class="footer-content">
                <p>&copy; 2025 Semana de Sistemas | UES FMO</p>
                <a href="#">Volver arriba ↑</a>
            </div>
        </footer>
    </div>
</body>
</html>