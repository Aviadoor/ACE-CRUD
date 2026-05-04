<?php

session_start();

/** @var array $datos */
$datos = $datos ?? [];

$usuarios = $datos['usuarios'] ?? [];

$dominio = URL;

if (!$_SESSION['validation'])
{

    header("Location: " . URL);

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Gestión - Usuarios</title>
    <link rel="stylesheet" href="/public/css/usuario.css">
</head>
<body>
    <?php include APP . '/views/inc/nav.php'; ?>

    <main class="container">
        <header class="header">
            <h1>Gestión de Usuarios</h1>
            <p>Agrega nuevos registros o gestiona los existentes.</p>
        </header>

        <section class="form-card">
            <h2>Registrar Nuevo Usuario</h2>
            <form method="POST" class="grid-form">
                <div class="input-group">
                    <label for="nombre">Nombre Completo</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ej. Juan Pérez" required>
                </div>
                <div class="input-group">
                    <label for="correo">Correo Electrónico</label>
                    <input type="email" id="correo" name="correo" placeholder="ejemplo@correo.com" required>
                </div>
                <div class="input-group">
                    <label for="telefono">Teléfono</label>
                    <input type="tel" id="telefono" name="telefono" placeholder="+51 999 999 999">
                </div>
                <button type="submit" name="btn_enviarUsuario" class="btn-primary">Registrar Usuario</button>
            </form>
        </section>

        <section class="table-card">
            <h2>Listado de Usuarios</h2>
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Teléfono</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($usuarios as $usuario): ?>
                        <tr>
                            <td><?= htmlspecialchars($usuario[0]) ?></td>
                            <td><strong><?= htmlspecialchars($usuario[1]) ?></strong></td>
                            <td><?= htmlspecialchars($usuario[2]) ?></td>
                            <td><?= htmlspecialchars($usuario[3]) ?></td>
                            <td class="actions">
                                <a href="<?= $dominio ?>/usuario/update/<?= $usuario[0] ?>" class="btn-edit">Actualizar</a>
                                <a href="<?= $dominio ?>/usuario/delete/<?= $usuario[0] ?>" class="btn-delete" onclick="return confirm('¿Eliminar?')">Eliminar</a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</body>
</html>