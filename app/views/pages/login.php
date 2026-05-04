<?php 

session_start();

$datos = $datos ?? [];

$validation = $datos['validation'];

if ($validation)
{

    $_SESSION['user'] = $datos['user'];

    $_SESSION['password'] = $datos['password'];

    header("Location: " . URL);

}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - ACE Perú</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7f6; /* Fondo gris claro para resaltar el formulario */
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1; /* Permite que el contenido principal ocupe el espacio disponible empujando el footer abajo */
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .login-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-container h2 {
            text-align: center;
            color: #0056b3;
            margin-top: 0;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 500;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; /* Asegura que el padding no desborde el ancho */
            font-size: 1rem;
        }

        .form-group input:focus {
            outline: none;
            border-color: #0056b3;
            box-shadow: 0 0 5px rgba(0, 86, 179, 0.3);
        }

        .btn-submit {
            width: 100%;
            background-color: #0056b3;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-submit:hover {
            background-color: #004494;
        }

        .forgot-password {
            text-align: center;
            margin-top: 15px;
            font-size: 0.9rem;
        }

        .forgot-password a {
            color: #0056b3;
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Contenedor principal con el formulario -->
    <main>
        <div class="login-container">
            <h2>Acceso al Sistema</h2>
            
            <!-- El formulario enviará los datos a un archivo PHP para procesarlos mediante el método POST -->
            <form method="POST">
                
                <div class="form-group">
                    <label for="usuario">Usuario:</label>
                    <input type="text" id="usuario" name="user" placeholder="Ingresa tu usuario" required>
                </div>
                
                <div class="form-group">
                    <label for="contrasenia">Contraseña:</label>
                    <input type="password" id="contrasenia" name="password" placeholder="Ingresa tu contraseña" required>
                </div>
                
                <button type="submit" class="btn-submit" name="btn_login">Ingresar</button>
                
            </form>

            <div class="forgot-password">
                <a href="./singup">Crear cuenta</a>
            </div>
        </div>
    </main>
</body>
</html>