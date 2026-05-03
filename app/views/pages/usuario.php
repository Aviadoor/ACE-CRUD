<?php
/** @var array $datos */
$datos = $datos ?? [];

$usuarios = $datos['usuarios'] ?? [];

$dominio = URL;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <form method="POST">
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
        <button type="submit" name="btn_enviarUsuario">Enviar</button>
    </form>
    <br><br>
    <div>
        <label>
            id______Nombre______Correo______Telefono
            <ul>
                <li>
                    <?php foreach($usuarios as $indice => $usuario): ?>
                        <?= $usuario[0] ?>__________
                        <?= $usuario[1] ?>__________
                        <?= $usuario[2] ?>_____________
                        <?= $usuario[3] ?>
                        => <a href="<?= $dominio ?>/usuario/update/<?=  $usuario[0] ?>">Actualizar</a> --- => <a href="<?= $dominio ?>/usuario/delete/<?=  $usuario[0] ?>">Eliminar</a><br>
                    <?php endforeach ?>
                </li>            
            </ul>
        </label>
        <ul>
        </ul>
    </div>
    
</body>
</html>