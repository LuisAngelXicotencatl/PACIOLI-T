<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="../css/style-home.css">
    <link rel="stylesheet" href="../css/styles-recomendados.css">
    <link rel="stylesheet" href="../css/styles_footer.css">
    <link rel="stylesheet" href="../css/styles-notificacion.css">
    <title>Document</title>
</head>

<body>
        <header class="nav">
            <h1 class="icon">
                <a class="sub" href="inicioAdmin.php">PACIOLI</a>
            </h1>
            <nav>
        </header> 

    <!-- citas -->
    <section id="nosotros" class="bg-gray-100 py-8 md:py-16">
    <div class="text-2xl md:text-4xl font-bold text-center mb-4 md:mb-8 text-gray-900">Mis clientes</div>
    <p class="text-base md:text-lg text-gray-700 max-w-3xl mx-auto mb-4 md:mb-8 ">
    </p>
    <div class="flex items-center justify-center space-x-4 flex-wrap">
        <?php
        include('../CONTROLLER/conexionbd.php');
        $citas = "SELECT `citas`.`id_cita`, `citas`.`responsable`, `citas`.`usuario`, `usuarios`.`nombre`, `usuarios`.`portada`, `usuarios`.`celular`FROM `citas` LEFT JOIN `usuarios` ON `citas`.`usuario` = `usuarios`.`id_usuario` WHERE responsable = 1";
        $resultado = mysqli_query($conexion, $citas);
        $clientes = array();

        while ($row = mysqli_fetch_assoc($resultado)) {
            $usuario = $row['usuario'];
            if (!isset($clientes[$usuario])) {
                $clientes[$usuario] = array(
                    'nombre' => $row['nombre'],
                    'celular' => $row['celular'],
                    'id_cita' => $row['id_cita']
                );
            }
        }
        foreach ($clientes as $usuario => $infoCliente) {
        ?>
            <div class="bg-yellow-500 p-4 rounded-lg mb-4">
                <div class="text-lg md:text-xl font-bold text-gray-900"><?php echo $infoCliente['nombre']; ?></div>
                <div class="text-lg md:text-xl font-bold text-gray-900"><?php echo $infoCliente['celular']; ?></div>
                <div class="text-lg md:text-xl font-bold text-gray-900"><?php echo $infoCliente['celular']; ?></div>
                <a href="clienteinfo.php?id=<?php echo $infoCliente["usuario"]; ?>" class="inline-block"><button class="bg-gray-900 text-white px-4 py-2 rounded">Informacion</button></a>
            </div>
        <?php
        }
        ?>
    </div>
</section>

    <!--Cotizaciones-->
    <!-- footer--->
    <footer class="text-white py-8 bg-gray-800">
        <div class="text-2xl md:text-4xl font-bold text-center mb-4 md:mb-8 text-white">PACIOLI</div>
        <a href="sugerencia.php"><p class="text-base md:text-lg text-gray-400 text-center mb-4 md:mb-8">Enviar comentarios</p></a>
        <div class="flex justify-center items-center flex-col md:flex-row">
            <a href="../controller/cerrarSession.php"><button class="bg-gray-900 text-white px-4 py-2 rounded mb-2 md:mb-0 md:mr-2">Cerrar Sesión</button></a>
            <a href="#inicio" class="inline-block"><button class="bg-gray-900 text-white px-4 py-2 rounded">Regresar al Inicio</button></a>
        </div>
    </footer>
</body>
</html>