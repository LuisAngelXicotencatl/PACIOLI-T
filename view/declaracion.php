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

    <!-- Nosotros -->
    <section id="nosotros" class="bg-gray-100 py-8 md:py-16">
        <div class="text-2xl md:text-4xl font-bold text-center mb-4 md:mb-8 text-gray-900">Declaracion de impuestos</div>
        <p class="text-base md:text-lg text-gray-700 max-w-3xl mx-auto mb-4 md:mb-8">
        En PACIOLI, simplificamos el complejo mundo de la tributación para que puedas enfocarte en lo que haces mejor: hacer crecer tu negocio. Nuestra dedicada división de declaración de impuestos está aquí para proporcionarte servicios fiscales integrales que no solo cumplen con las normativas fiscales en constante cambio, sino que también optimizan tu posición financiera.
        <div class="text-2xl md:text-4xl font-bold text-center mb-4 md:mb-8 text-gray-900">Nuestro Enfoque:</div>
        <p class="text-base md:text-lg text-gray-700 max-w-3xl mx-auto mb-4 md:mb-8">
        En el ámbito tributario, la precisión y la planificación estratégica son fundamentales. En PACIOLI, comprendemos la importancia de maximizar los beneficios fiscales y minimizar las responsabilidades. Nos destacamos por ir más allá de la simple presentación de formularios, brindándote asesoramiento proactivo para optimizar tu situación fiscal y garantizar el cumplimiento total con las regulaciones vigentes.
        <div class="text-2xl md:text-4xl font-bold text-center mb-4 md:mb-8 text-gray-900"></div>
        <div class="flex flex-col sm:flex-row sm:space-x-4 justify-center">
            <div class="bg-yellow-500 p-4 rounded-lg mb-4 sm:mb-0">
                <div class="text-lg md:text-xl font-bold text-gray-900">Declaración de Impuestos Empresariales</div>
            </div>
            <div class="bg-yellow-500 p-4 rounded-lg mb-4 sm:mb-0">
                <div class="text-lg md:text-xl font-bold text-gray-900">Planificación Fiscal Estratégica</div>
            </div>
            <div class="bg-yellow-500 p-4 rounded-lg">
                <div class="text-lg md:text-xl font-bold text-gray-900">Cumplimiento Fiscal Internacional</div>
            </div>
        </div>
    </section>

    <!-- Clientes -->
    <section id="clientes" class="clientes">
        <div class="tarjet">
            <img src="../images/impuestos.webp" alt="portada">
        </div>
    </section>
    <!-- footer--->
    <footer class="text-white py-8">
        <div class="text-2xl md:text-4xl font-bold text-center mb-4 md:mb-8 text-gray-900">PACIOLI</div>
        <div class="flex justify-center items-center flex-col md:flex-row">
            <!-- Botón de Iniciar Sesión -->
            <a href="../src/index.html"><button class="bg-gray-900 text-white px-4 py-2 rounded mb-2 md:mb-0 md:mr-2">Iniciar Sesión</button></a>
            
            <!-- Botón de Registrarse -->
            <a href="./register.php"><button class="bg-gray-900 text-white px-4 py-2 rounded mb-2 md:mb-0 md:mr-2">Registrarse</button></a>
            
            <!-- Botón de Regresar al Inicio -->
            <a href="home.php" class="inline-block"><button class="bg-gray-900 text-white px-4 py-2 rounded">Regresar al Inicio</button></a>
        </div>
    </footer>
</body>
</html>
