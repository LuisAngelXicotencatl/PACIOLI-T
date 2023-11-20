<?php
include("../controller/conexionbd.php");
session_start();
$id = $_GET["id"];
$_SESSION['id_cita']= $id;
$cita = $_SESSION['id_cita'];
$micita = "SELECT * FROM citas where id_cita = '$cita'";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style-home.css">
    <link rel="stylesheet" href="../css/styles-recomendados.css">
    <link rel="stylesheet" href="../css/styles_footer.css">
    <link rel="stylesheet" href="../css/styles-notificacion.css">
    <title>Formulario de Citas</title>
</head>
<body class="bg-gray-100 p-8">
    <header class="nav">
        <h1 class="icon">
            <a class="sub" href="inicioAdmin.php">PACIOLI</a>
        </h1>
    </header> 
    <!-- citas -->
    <section id="nosotros" class="bg-gray-100 py-8 md:py-16">
        <?php $resultado = mysqli_query($conexion, $micita);
        while($row=mysqli_fetch_assoc($resultado)) { ?>
        <div class="text-2xl md:text-4xl font-bold text-center mb-4 md:mb-8 text-gray-900">Cita id-<?php echo $row['id_cita'];?></div>
        <p class="text-base md:text-lg text-gray-700 max-w-3xl mx-auto mb-4 md:mb-8">
        <ul class="text-gray-900">
            <li>Fecha: <?php echo $row['fecha'];?></li>
            <li>Hora: <?php echo $row['hora'];?></li>
            <li>Responsable: <?php echo $_SESSION['nombre'];?></li>
            <li>Oficina: <?php echo $row['oficina'];?></li>
            <li>Descripcion <?php echo $row['descripcion'];?></li>
        </ul>
        <a href="../controller/eliminarReunion.php?id=<?php echo $row["id_cita"];?>" class="inline-block"><button class="bg-red-700 text-white px-4 py-2 rounded">Eliminar cita</button></a>
        </p>
        <?php } ?>
    </section>
    <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
        <form action="../controller/modificar_formulario.php" method="POST">
            <!-- Selección de Hora -->
            <?php
            // Volver a obtener la información después del bucle para acceder a los valores correctos
            $resultado = mysqli_query($conexion, $micita);
            while ($row = mysqli_fetch_assoc($resultado)) { ?>
            <input type="hidden" name="cita" id="cita" value="<?php echo $row['id_cita'];?>" required></p>
            <?php } ?>
            <div class="mb-4">
                <label for="hora" class="block text-sm font-medium text-gray-600">Hora:</label>
                <input type="time" id="hora" name="hora" required class="mt-1 p-2 block w-full rounded-md bg-gray-100 text-gray-600 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
            </div>

            <!-- Selección de Fecha -->
            <div class="mb-4">
                <label for="fecha" class="block text-sm font-medium text-gray-600">Fecha:</label>
                <input type="date" id="fecha" name="fecha" required class="mt-1 p-2 block w-full text-gray-600 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
            </div>

            <!-- Botón de Enviar -->
            <div class="flex items-center justify-around">
                <a><button type="submit" class="bg-gray-900 text-white px-4 py-2 rounded-md hover:bg-gray-600 focus:outline-none focus:ring focus:border-blue-300">
                    Programar Cita
                </button></a>
            </div>
        </form>
    </div>

</body>
</html>
