<?php
error_reporting(0);
session_start();
$idEmpresa = $_SESSION['id_usuarioEmpresa'];
if ($idEmpresa == null || $idEmpresa == '0') {
    echo 'Error al iniciar sesión';
    die();
}
error_reporting(0);
$ID = $_SESSION['id_usuario'];
$empresaid = $_SESSION['id_Empresa'];
$empresa =  $_SESSION['id_usuarioEmpresa'];
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
                <a class="sub" href="inicioAdmin.php">PACIOLI-Empresas</a>
            </h1>
        </header> 
        <div class="title-b title-vertical">
            PACIOLI
        </div>
        <h1 class="title-b title-vertical"><?php echo $_SESSION['nombre'];?> !!</h1>
        <a accesskey="r" href="#nosotros"><div class="arrow slider-arrow ">↓</div></a>
    </section>

    <!-- citas -->
    <section id="nosotros" class="bg-gray-100 py-8 md:py-16">
        <div class="text-2xl md:text-4xl font-bold text-center mb-4 md:mb-8 text-gray-900">Reuniones</div>
        <p class="text-base md:text-lg text-gray-700 max-w-3xl mx-auto mb-4 md:mb-8">
        Nos encontramos comprometidos en brindar el mejor servicio a nuestros apreciados clientes, y es por ello, PACIOLI genera reuniones para notificar los avances con la empresa
        </p>
        <div class="flex items-center justify-center space-x-4 flex-wrap">
            <?php
            include('../CONTROLLER/conexionbd.php');
            $citas = "SELECT *  FROM reuniones where id_empresa = $empresaid";
            $resultado = mysqli_query($conexion, $citas);
             while($row=mysqli_fetch_assoc($resultado)) {
            ?>
            <div class="bg-red-700 p-4 rounded-lg mb-4">
                <div class="text-lg md:text-xl font-bold text-gray-900"><?php echo $row['fecha'];?></div>
                <div class="text-lg md:text-xl font-bold text-gray-900"><?php echo $row['hora'];?></div>
            </div>
            <?php
            }
             ?>
        </div>
    </section>
    <section id="nosotros" class="bg-gray-100 py-8 md:py-16">
        <div class="text-2xl md:text-4xl font-bold text-center mb-4 md:mb-8 text-gray-900">Agendar cita</div>
        <p class="text-base md:text-lg text-gray-700 max-w-3xl mx-auto mb-4 md:mb-8">
        Con el objetivo de facilitar la planificación de sus citas, compartimos con usted nuestras fechas disponibles.
        </p>
        <div class="flex items-center justify-center space-x-4 flex-wrap">
            <?php
            include('../CONTROLLER/conexionbd.php');
            $citas_query = "SELECT * FROM citas WHERE usuario = $ID";
            $citas_result = mysqli_query($conexion, $citas_query);
            $citas = "SELECT *  FROM citas where usuario = 3";
            if (mysqli_num_rows($citas_result) > 0) {
                echo '<div class="text-lg md:text-xl font-bold text-gray-900">Ya tiene una cita programada.</div> <a href="miCitaEmpresa.php" class="inline-block"><button class="bg-gray-900 text-white px-4 py-2 rounded">Ver</button></a>';
            } else {
            $resultado = mysqli_query($conexion, $citas);
             while($row=mysqli_fetch_assoc($resultado)) {
            ?>
            <div class="bg-yellow-500 p-4 rounded-lg mb-4">
                <div class="text-lg md:text-xl font-bold text-gray-900"><?php echo $row['fecha'];?></div>
                <div class="text-lg md:text-xl font-bold text-gray-900"><?php echo $row['hora'];?></div>
                <a href="cita.php?id=<?php echo $row["id_cita"];?>" class="inline-block"><button class="bg-gray-900 text-white px-4 py-2 rounded">Tomar fecha</button></a>
            </div>
            <?php
            }
        }
             ?>
        </div>
    </section>
    <section id="nosotros" class="bg-gray-100 py-8 md:py-16">
        <div class="text-2xl md:text-4xl font-bold text-center mb-4 md:mb-8 text-gray-900">Agendar cita</div>
        <p class="text-base md:text-lg text-gray-700 max-w-3xl mx-auto mb-4 md:mb-8">   
El tener una cuenta nivel EMPRESARIA, PACIOLI le brinda la oportunidad exclusiva de solicitar una cita personalizada en sus propias instalaciones, con la flexibilidad de seleccionar un horario que se ajuste a sus conveniencias y posibilidades, garantizando un encuentro que permita
 abordar de manera detallada sus necesidades financieras y brindar soluciones a medida.
        </p>
        <div class="flex items-center justify-center space-x-4 flex-wrap">
        <a href="crearMiCita.php" class="inline-block"><button class="bg-gray-900 text-white px-4 py-2 rounded">Generar mi cita</button></a>
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