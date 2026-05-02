<?php
/** @var array $datos */
$datos = $datos ?? [];
$usuarios = $datos['usuarios'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <form action="../controllers/Usuario.php" method="post">
        <label>
            Nombre
            <input type="text" name="nombre">
        </label>
        <br><br>
        <label>
            Correo <input type="text" name="correo">
        </label>
        <label>
            Telefono <input type="text" name="telefono">
        </label>
        <br><br>
        <button type="submit">Enviar</button>
    </form>
    <br><br>
    <div>
        <label>
            id______Nombre______Correo______Telefono
            <ul>
                <li>
                    <?php foreach($usuarios as $indice => $usuario): ?>
                        <?= $usuario[0] ?>__________<?= $usuario[1] ?>__________<?= $usuario[2] ?>_____________<?= $usuario[3] ?><br>
                    <?php endforeach ?>
                </li>            
            </ul>
        </label>
        <ul>
        </ul>
    </div>
    
</body>
</html>