
<?php
include("../controller/conexionbd.php");
session_start();
$ID = $_SESSION['id_usuario'];
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
                <a class="sub" href="Home.php">PACIOLI</a>
            </h1>
        </header> 

    <!-- citas -->
    <section id="nosotros" class="bg-gray-100 py-8 md:py-16">
        <div class="text-2xl md:text-4xl font-bold text-center mb-4 md:mb-8 text-gray-900">Sugerencias y comentarios</div>
        <p class="text-base md:text-lg text-gray-700 max-w-3xl mx-auto mb-4 md:mb-8">
        Sus comentarios nos ayudan a mejorar
        </p>
        <form action="../controller/sugerencia.php" method="post">
            <input type="hidden" name="usuario" value="<?php echo $_SESSION['id_usuario'];?>" required></p>
            <div class="">
                <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">Descripcion:</label>
                <input placeholder="" type="text" id="descripcion" name="descripcion" class=" text-gray-900 w-full p-2 border rounded-md">
            </div>
            <button type="submit" class="bg-gray-900 text-white px-4 py-2 rounded-md">enviar</button>
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