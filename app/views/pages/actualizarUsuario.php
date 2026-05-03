<?php
$datos = $datos ?? [];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Usuario</title>
</head>
<body>
    
    <form method="post">
        <label>
            nombre
            <input type="text" name="nombre" value="<?= $datos['usuario'][1] ?>">
            _____
        </label>
        
        <label>
            correo
            <input type="text" name="correo" value="<?= $datos['usuario'][2] ?>">
            _____
        </label>
        <label>
            telefono
            <input type="text" name="telefono" value="<?= $datos['usuario'][3] ?>">
            _____
        </label>
        <button type="submit" name="btn_enviar">Actualizar</button>
    </form>
</body>
</html>