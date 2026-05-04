<?php

session_start();

$load_Usuarios = false;

if(isset($_SESSION['user'], $_SESSION['password']))
{

    $load_Usuarios = true;
    
}

?>

<head>
    <style>
        /* Estilos de la Barra de Navegación */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #0056b3; /* Azul corporativo */
            padding: 10px 5%;
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        .navbar .logo {
            font-size: 1.5rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
            align-items: center;
        }

        .nav-item {
            margin-left: 25px;
        }

        .nav-link {
            text-decoration: none;
            color: white;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #d1ecf1;
        }

        /* Estilo específico para Usuarios */
        .nav-link.usuarios i {
            margin-right: 5px;
        }

        /* Botón de Inicio de Sesión */
        .btn-login {
            background-color: #ffc107; /* Color resaltado (amarillo/dorado) */
            color: #333;
            padding: 8px 18px;
            border-radius: 4px;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .btn-login:hover {
            background-color: #e0a800;
            color: #000;
        }

        /* Responsividad básica */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                padding: 15px;
            }
            .nav-menu {
                margin-top: 15px;
            }
            .nav-item {
                margin: 0 10px;
            }
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="logo">
            ACE PERÚ
        </div>
        
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="/" class="nav-link">Inicio</a>
            </li>

            <?php if($load_Usuarios): ?>
            <li class="nav-item">
                <a href="/usuario/form" class="nav-link usuarios">Usuarios</a>
            </li>
            <?php endif ?>

            <?php if(!($load_Usuarios)): ?>
            <li class="nav-item">
                <a href="/Authentication/Login" class="nav-link btn-login">Inicio Sesión</a>
            </li>
            <?php endif ?>

            <?php if($load_Usuarios): ?>
            <li class="nav-item">
                <a class="nav-link btn-login">Logout</a>
            </li>
            <?php endif ?>
        </ul>
    </nav>