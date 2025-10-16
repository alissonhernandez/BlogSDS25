<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Visita</title>
    <link rel="stylesheet" href="/public/css/estilo.css">
</head>
<body>
    <h2>Registro de Visitas</h2>

    <form action="/visitas/registrar" method="POST">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Correo:</label><br>
        <input type="email" name="correo"><br><br>

        <label>Comentario:</label><br>
        <textarea name="comentario"></textarea><br><br>

        <button type="submit">Guardar Visita</button>
    </form>

    <h2>Lista de Visitas</h2>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Comentario</th>
            <th>Fecha</th>
        </tr>
        <?php foreach($visitas as $v): ?>
        <tr>
            <td><?= $v['id'] ?></td>
            <td><?= htmlspecialchars($v['nombre']) ?></td>
            <td><?= htmlspecialchars($v['correo']) ?></td>
            <td><?= htmlspecialchars($v['comentario']) ?></td>
            <td><?= $v['fecha'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
