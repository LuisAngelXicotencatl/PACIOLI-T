<?php
include("../controller/conexionbd.php");
session_start();
$id = $_SESSION['id_usuarioAdm'];
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
<body class="bg-gray-900 p-8">
    <header class="nav bg-gray-900">
        <h1 class="icon">
            <a class="sub" href="inicioAdmin.php">PACIOLI</a>
        </h1>
    </header> 
    <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
        <form action="../controller/agregarcita.php" method="POST">
        <div class="text-2xl md:text-4xl font-bold text-center mb-4 md:mb-8 text-gray-900">Nueva cita</div>
            <!-- Selección de Hora -->
            <input type="hidden" name="responsable" id="responsable" value="<?php echo $_SESSION['id_usuarioAdm'];?>" required></p>
            <div class="mb-4">
                <label for="hora" class="block text-sm font-medium text-gray-600">Hora:</label>
                <input type="time" id="hora" name="hora" required class="mt-1 p-2 block w-full rounded-md bg-gray-100 text-gray-600 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
            </div>
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Oficina
            </label>
            <select name="oficina" id="oficina" class="w-full p-2 border border-gray-300 rounded-md text-gray-900">
                <option value="1" class="text-green-500">Oficina 1</option>
                <option value="2" class="text-red-500">Oficina 2</option>
            </select>
            <!-- Selección de Fecha -->
            <div class="mb-4">
                <label for="fecha" class="block text-sm font-medium text-gray-600">Fecha:</label>
                <input type="date" id="fecha" name="fecha" required class="mt-1 p-2 block w-full text-gray-600 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
            </div>

            <!-- Botón de Enviar -->
            <div class="flex items-center justify-around">
                <a><button type="submit" class="bg-gray-900 text-white px-4 py-2 rounded-md hover:bg-gray-600 focus:outline-none focus:ring focus:border-blue-300">
                   Crear cita
                </button></a>
            </div>
        </form>
    </div>
</body>
</html>
