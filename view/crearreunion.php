<?php
session_start();
$ID = $_GET['id'];
$_SESSION['id_empresa']= $ID;
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

<body>
       <header class="nav">
            <h1 class="icon">
                <a class="sub" href="inicio.php">PACIOLI</a>
            </h1>
        </header> 

    <!-- citas -->
    <section id="nosotros" class="bg-gray-100 py-8 md:py-16">
        <div class="text-2xl md:text-4xl font-bold text-center mb-4 md:mb-8 text-gray-900">Crear cita <?php echo $_SESSION['id_empresa'];?> <?php echo $_SESSION['id_usuario'];?></div>
        <form action="../controller/crearReunion.php" method="post">
            <!---empresa-->
            <input type="hidden" name="empresa" id="empresa" value="<?php echo $_SESSION['id_empresa'];?>"></p>
            <!---Fecha-->
            <div class="mb-4">
                <label for="fecha" class="block text-sm font-medium text-gray-600">Fecha:</label>
                <input type="date" id="fecha" name="fecha" required class="mt-1 p-2 block w-full text-gray-600 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
            </div>
            <!-- Selección de Hora -->
            <div class="mb-4">
                <label for="hora" class="block text-sm font-medium text-gray-600">Hora:</label>
                <input type="time" id="hora" name="hora" required class="mt-1 p-2 block w-full rounded-md bg-gray-100 text-gray-600 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
            </div>
            <!-- descripcion -->
            <div class="">
                <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">Descripcion:</label>
                <input placeholder="ingrese una descripcion de la razon de su citas" type="text" id="descripcion" name="descripcion" class=" text-gray-900 w-full p-2 border rounded-md">
            </div>
            <!---contador-->
            <input type="hidden" name="contador" id="contador" value="<?php echo $_SESSION['id_usuario'];?>"></p>
            <button type="submit" class="bg-gray-900 text-white px-4 py-2 rounded-md">Enviar</button>
        </form>
    </section>
    <!-- footer--->
    <footer class="text-white py-8">
        <div class="text-2xl md:text-4xl font-bold text-center mb-4 md:mb-8 text-gray-900">PACIOLI</div>
        <div class="flex justify-center items-center flex-col md:flex-row">
            <a href="inicioAdmin.php" class="inline-block"><button class="bg-gray-900 text-white px-4 py-2 rounded">Regresar al Inicio</button></a>
        </div>
    </footer>
</body>
</html>