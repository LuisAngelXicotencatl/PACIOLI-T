
<?php
include("../controller/conexionbd.php");
session_start();
$ID = $_SESSION['id_usuarioEmpresa'];
$contador = "SELECT `contador`.`id_contador`, `contador`.`id_usuario`, `usuarios`.`nombre`, `usuarios`.`correo`, `usuarios`.`celular`, `usuarios`.`celular`
FROM `contador` 
	LEFT JOIN `usuarios` ON `contador`.`id_usuario` = `usuarios`.`id_usuario`";
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
        <div class="text-2xl md:text-4xl font-bold text-center mb-4 md:mb-8 text-gray-900">Crear cita <?php echo $_SESSION['id_usuario'];?></div>
        <form action="../controller/micitaEM.php" method="post">
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
            <!-- Contador asistente -->
            <div class="mb-4">
            <label for="responsable" class="block text-gray-700 text-sm font-bold mb-2">Asistente</label>
            <select name="responsable" id="responsable" class="w-full p-2 border border-gray-300 rounded-md text-gray-900">
                <option value="" class="text-green-500">seleccionar</option>
                <?php $resultado = mysqli_query($conexion, $contador);
                while($row=mysqli_fetch_assoc($resultado)) { ?>
                <option value="<?php echo $row['id_contador'];?>" name="responsable" id="responsable" class="text-green-500"><?php echo $row['nombre'];?> <?php echo $row['id_contador'];?></option>
                <?php } ?>
            </select>
            </div>
            <!-- oficina NO APLICA -->
            <input type="hidden" name="oficina" id="oficina" value="3"></p>
            <!-- id_usuario -->
            <input type="hidden" name="usuario" id="usuario" value="<?php echo $_SESSION['id_usuario'];?>"></p>
            <!-- descripcion -->
            <div class="">
                <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">Descripcion:</label>
                <input placeholder="ingrese una descripcion de la razon de su citas" type="text" id="descripcion" name="descripcion" class=" text-gray-900 w-full p-2 border rounded-md">
            </div>
            <button type="submit" class="bg-gray-900 text-white px-4 py-2 rounded-md">Enviar</button>
        </form>
    </section>
    <!-- footer--->
    <footer class="text-white py-8">
        <div class="text-2xl md:text-4xl font-bold text-center mb-4 md:mb-8 text-gray-900">PACIOLI</div>
        <div class="flex justify-center items-center flex-col md:flex-row">
            <a href="inicio.php" class="inline-block"><button class="bg-gray-900 text-white px-4 py-2 rounded">Regresar al Inicio</button></a>
        </div>
    </footer>
</body>
</html>