<?php


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A.C. Enterprises S.A.C. - Herramientas Industriales</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            line-height: 1.6;
        }
        header {
            background: #0056b3;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        .hero {
            background-color: #f4f4f4;
            padding: 60px 20px;
            text-align: center;
        }
        .hero h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }
        .hero h2 {
            font-weight: normal;
            color: #666;
            margin-bottom: 30px;
        }
        .btn-whatsapp {
            background: #25D366;
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            font-size: 1.2em;
            border-radius: 5px;
            font-weight: bold;
        }
        .services {
            display: flex;
            flex-wrap: wrap;
            padding: 40px 20px;
            justify-content: center;
            gap: 20px;
        }
        .card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 300px;
            padding: 20px;
            text-align: center;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
        }
        .brands {
            background: #e9ecef;
            padding: 40px 20px;
            text-align: center;
        }
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 30px 20px;
        }
        footer a {
            color: #25D366;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <?php include APP . '/views/inc/nav.php'; ?>
    <header>
        <h1>A.C. Enterprises S.A.C.</h1>
        <p>Herramientas y Accesorios Industriales</p>
    </header>

    <section class="hero">
        <h1>Al Servicio de la Industria desde el 2001</h1>
        <h2>Encuentra todo en herramientas, accesorios, productos de seguridad industrial y químicos.</h2>
        <a href="https://wa.me/51958588262" class="btn-whatsapp">¡Cotiza por WhatsApp al 958588262!</a>
    </section>

    <section class="services">
        <div class="card">
            <h3>Herramientas</h3>
            <p>Taladros, sierras, esmeriles, hidrolavadoras y equipos completos de jardinería y medición.</p>
        </div>
        <div class="card">
            <h3>Accesorios</h3>
            <p>Brocas, cinceles, discos diamantados, fresas y punteras para cualquier proyecto industrial.</p>
        </div>
        <div class="card">
            <h3>Seguridad Industrial</h3>
            <p>Cascos, guantes anticorte, protección visual y ropa térmica para un trabajo seguro.</p>
        </div>
        <div class="card">
            <h3>Químicos</h3>
            <p>Aerosoles para mantenimiento, tratamiento de efluentes y análisis de aguas.</p>
        </div>
    </section>

    <section class="brands">
        <h2>Marcas con las que trabajamos</h2>
        <p>Somos distribuidores de <strong>Makita, Nalco, Tivoly y Ambro-sol</strong>.</p>
    </section>

    <?php include APP . '/views/inc/footer.php'; ?>

</body>
</html>