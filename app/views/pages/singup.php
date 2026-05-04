<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Rápido - ACE Perú</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7f6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .register-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px; /* Tamaño compacto ideal para 2 campos */
        }

        .register-container h2 {
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
            box-sizing: border-box;
            font-size: 1rem;
        }

        .form-group input:focus {
            outline: none;
            border-color: #0056b3;
            box-shadow: 0 0 5px rgba(0, 86, 179, 0.3);
        }

        .btn-submit {
            width: 100%;
            background-color: #25D366; /* Usamos verde para diferenciar el botón de registro del de login */
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
        }

        .btn-submit:hover {
            background-color: #1ebc5a;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
            font-size: 0.95rem;
            color: #666;
        }

        .login-link a {
            color: #0056b3;
            text-decoration: none;
            font-weight: bold;
        }

        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <main>
        <div class="register-container">
            <h2>Registro Rápido</h2>
            
            <form method="POST">
                
                <div class="form-group">
                    <label for="usuario">Nombre de usuario:</label>
                    <input type="text" id="usuario" name="user" placeholder="Ej. jperez99" required>
                </div>
                
                <div class="form-group">
                    <label for="contrasenia">Contraseña:</label>
                    <input type="password" id="contrasenia" name="password" placeholder="Mínimo 8 caracteres" required>
                </div>
                
                <button type="submit" class="btn-submit" name="btn_singup">Registrarse</button>
                
            </form>

            <div class="login-link">
                ¿Ya tienes cuenta? <a href="./login">Inicia sesión</a>
            </div>
        </div>
    </main>
</body>
</html>