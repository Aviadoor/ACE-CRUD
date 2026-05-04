<?php

session_start();

$datos = $datos ?? [];

$usuario = $datos['usuario'] ?? ['', '', '', ''];

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
    <title>Actualizar Perfil</title>
    <link rel="stylesheet" href="/public/css/actualizarUsuario.css">
</head>
<body>
    <div class="edit-container">
        <div class="edit-card">
            <header>
                <a href="javascript:history.back()" class="back-link">← Volver</a>
                <h1>Actualizar Usuario</h1>
            </header>

            <form method="post" class="stack-form">
                <div class="form-item">
                    <label>Nombre del Usuario</label>
                    <input type="text" name="nombre" value="<?= htmlspecialchars($usuario[1]) ?>" required>
                </div>
                <div class="form-item">
                    <label>Correo Electrónico</label>
                    <input type="email" name="correo" value="<?= htmlspecialchars($usuario[2]) ?>" required>
                </div>
                <div class="form-item">
                    <label>Teléfono</label>
                    <input type="text" name="telefono" value="<?= htmlspecialchars($usuario[3]) ?>">
                </div>
                <button type="submit" name="btn_enviar" class="btn-update">Guardar Cambios</button>
            </form>
        </div>
    </div>
</body>
</html>