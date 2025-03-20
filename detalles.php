
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Xtreme Tactical</title>
</head>
<body>

    <header>
        <img src="img/LOGOXD.png" alt="LOGO">
        <div>
            <h1>XTREME TACTICAL AIR GUNS</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">INICIO</a></li>
                <li><a href="cuchillos.php">CUCHILLOS</a></li>
                <li><a href="armas.php">ARMAS DE AIRE</a></li>
                <li><a href="equipamiento.php">EQUIPAMIENTO</a></li>
                <li><a href="otros.php">OTROS</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <div>
                <?php
                $producto = [
                    "nombre" => "Pistola de Aire Xtreme 5000",
                    "imagen" => "producto1.jpg",
                    "detalles" => [
                        "Calibre: 5.5mm",
                        "Velocidad: 900 fps",
                        "Material: Aluminio",
                        "Incluye mira telescópica",
                        "Peso: 2.5 kg"
                    ]
                ];
                ?>

                <h2><?php echo $producto['nombre']; ?></h2>
                <img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>" width="300">

            </div>
            <div>
                <h3>Detalles del Producto</h3>
                <ul>
                    <?php foreach($producto['detalles'] as $detalle): ?>
                        <li><?php echo $detalle; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>
    </main>

</body>
</html>
