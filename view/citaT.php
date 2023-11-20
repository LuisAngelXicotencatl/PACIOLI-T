
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="../css/style-home.css">
    <link rel="stylesheet" href="../css/styles-recomendados.css">
    <link rel="stylesheet" href="../css/styles_footer.css">
    <title>Document</title>
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
            <li>Cliente: <?php echo $row['usuario'];?></li>
            <li>Oficina: <?php echo $row['oficina'];?></li>
            <li>Descripcion <?php echo $row['descripcion'];?></li>
        </ul>
        </p>
        <a href="clienteinfo.php?id=<?php echo $row['usuario'];?>" class="inline-block"><button class="bg-gray-900 text-white px-4 py-2 rounded">Ver informacion del Cliente</button></a>
        <?php } ?>
    </section>
    <!-- footer--->
    <footer class="text-white py-8 bg-gray-80">
        <div class="text-2xl md:text-4xl font-bold text-center mb-4 md:mb-8 text-gray-900">PACIOLI</div>
        <div class="flex justify-center items-center flex-col md:flex-row">
            <a href="inicioAdmin.php" class="inline-block"><button class="bg-gray-900 text-white px-4 py-2 rounded">Regresar al Inicio</button></a>
        </div>
    </footer>
</body>
</html>