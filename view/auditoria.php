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
        <div class="text-2xl md:text-4xl font-bold text-center mb-4 md:mb-8 text-gray-900">Auditoria</div>
        <p class="text-base md:text-lg text-gray-700 max-w-3xl mx-auto mb-4 md:mb-8">
        Bienvenido a PACIOLI, donde la excelencia en auditoría se encuentra con la innovación estratégica. Nos dedicamos a proporcionar servicios de auditoría de clase mundial que no solo cumplen con los estándares regulatorios más rigurosos, sino que también ofrecen perspectivas valiosas para el crecimiento y la eficiencia de tu negocio.
        <div class="text-2xl md:text-4xl font-bold text-center mb-4 md:mb-8 text-gray-900">Nuestro Enfoque:</div>
        <p class="text-base md:text-lg text-gray-700 max-w-3xl mx-auto mb-4 md:mb-8">
        En PACIOLI, entendemos que la auditoría va más allá de la mera conformidad. Nuestro enfoque integral abarca la identificación proactiva de oportunidades para mejorar procesos, fortalecer controles internos y maximizar la eficacia operativa. Nos enorgullece ir más allá de la simple revisión de cifras, brindando a nuestros clientes un análisis profundo que respalda la toma de decisiones informada.
        <div class="text-2xl md:text-4xl font-bold text-center mb-4 md:mb-8 text-gray-900"></div>
        <div class="flex flex-col sm:flex-row sm:space-x-4 justify-center">
            <div class="bg-yellow-500 p-4 rounded-lg mb-4 sm:mb-0">
                <div class="text-lg md:text-xl font-bold text-gray-900">Auditoría Financiera</div>
            </div>
            <div class="bg-yellow-500 p-4 rounded-lg mb-4 sm:mb-0">
                <div class="text-lg md:text-xl font-bold text-gray-900">Auditoría Interna</div>
            </div>
            <div class="bg-yellow-500 p-4 rounded-lg">
                <div class="text-lg md:text-xl font-bold text-gray-900">Auditoría de Cumplimiento</div>
            </div>
        </div>
    </section>

    <!-- Clientes -->
    <section id="clientes" class="clientes">
        <div class="tarjet">
            <img src="../images/auditoria.jpeg" alt="portada">
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
