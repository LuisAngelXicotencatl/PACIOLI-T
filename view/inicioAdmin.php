<?php
error_reporting(0);
session_start();
$id = $_SESSION['id_usuario'];
if ($id == null || $id == '0') {
    echo 'Error al iniciar sesión';
    die();
}
error_reporting(0);
$ID = $_SESSION['id_usuario'];
$admin = $_SESSION['id_usuarioAdm'];
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
    <section id="inicio" class="body">
        <header class="nav">
            <h1 class="icon">
                <a class="sub" href="inicioAdmin.php">PACIOLI</a>
            </h1>
            <nav>
                <ul>
                    <li><a accesskey="r" href="#nosotros">Empresas</a></li>
                    <li><a accesskey="c" href="clientes.php">Clientes</a></li>
                </ul>
            </nav>
        </header> 
        <div class="title-b title-vertical">
            PACIOLI
        </div>
        <h1 class="title-b title-vertical">Administrador <?php echo $_SESSION['nombre'];?>!!</h1>
        <a accesskey="r" href="#nosotros"><div class="arrow slider-arrow ">↓</div></a>
    </section>

    <!-- citas -->
    <section id="nosotros" class="bg-gray-100 py-8 md:py-16">
        <div class="text-2xl md:text-4xl font-bold text-center mb-4 md:mb-8 text-gray-900">Mis reuniones</div>
        <p class="text-base md:text-lg text-gray-700 max-w-3xl mx-auto mb-4 md:mb-8">
        Aqui le mostramos todas tus reuniones creadas en las que sus clientes ya han apartado el lugar
        </p>
        <p class="text-base md:text-lg text-gray-700 max-w-3xl mx-auto mb-4 md:mb-8 ">
        </p>
        <div class="flex items-center justify-center space-x-4 flex-wrap">
            <?php
            include('../CONTROLLER/conexionbd.php');
            $citas = "SELECT *  FROM citas where responsable = 1 and usuario != 3";
            $resultado = mysqli_query($conexion, $citas);
             while($row=mysqli_fetch_assoc($resultado)) {
            ?>
            <div class="bg-yellow-500 p-4 rounded-lg mb-4">
                <div class="text-lg md:text-xl font-bold text-gray-900"><?php echo $row['fecha'];?></div>
                <div class="text-lg md:text-xl font-bold text-gray-900"><?php echo $row['hora'];?></div>
                <a href="citaT.php?id=<?php echo $row["id_cita"];?>" class="inline-block"><button class="bg-gray-900 text-white px-4 py-2 rounded">Informacion</button></a>
            </div>
            <?php
            }
            ?>
        </div>
    </section>
    <section id="nosotros" class="bg-gray-100 py-8 md:py-16 flex items-center justify-center flex-col">
        <div class="text-2xl md:text-4xl font-bold text-center mb-4 md:mb-8 text-gray-900">Mis reuniones sin clientes</div>
        <p class="text-base md:text-lg text-gray-700 max-w-3xl mx-auto mb-4 md:mb-8">
        Aqui le mostramos todas sus reuniones creadas en las que sus cliente aun no han apartado la raunion,por ello puede modificarlas o eliminarlas
        </p>
        <div class="flex items-center justify-center space-x-4 flex-wrap">
            <?php
            include('../CONTROLLER/conexionbd.php');
            $citas = "SELECT *  FROM citas where responsable = 1 and usuario = 3";
            $resultado = mysqli_query($conexion, $citas);
             while($row=mysqli_fetch_assoc($resultado)) {
            ?>
            <div class="bg-blue-500 p-4 rounded-lg mb-4">
                <div class="text-lg md:text-xl font-bold text-gray-900"><?php echo $row['fecha'];?></div>
                <div class="text-lg md:text-xl font-bold text-gray-900"><?php echo $row['hora'];?></div>
                <a href="modificacitaA.php?id=<?php echo $row["id_cita"];?>" class="inline-block"><button class="bg-gray-900 text-white px-4 py-2 rounded">Modificar</button></a>
            </div>
            <?php
            }
            ?>
        </div>
        <p class="text-base md:text-lg text-gray-700 max-w-3xl mx-auto mb-4 md:mb-8">
        Se le recomendamos no tener menos de 5 horarios sin clientes, con el fin de que nuestros usuarios no esperen demasiado en obtener una cita
        </p>
        <a href="nuevaCita.php" class="inline-block"><button class="bg-gray-900 text-white px-4 py-2 rounded">+ Nueva horario +</button></a>
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