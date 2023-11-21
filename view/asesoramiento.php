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
        <div class="text-2xl md:text-4xl font-bold text-center mb-4 md:mb-8 text-gray-900">Área de Asesoramiento Contable</div>
        <p class="text-base md:text-lg text-gray-700 max-w-3xl mx-auto mb-4 md:mb-8">
        En PACIOLI, creemos que la contabilidad es más que números; es el lenguaje que habla el verdadero rendimiento y la salud financiera de tu empresa. Nuestra división de asesoramiento contable está dedicada a ofrecer una visión clara y estratégica de tus finanzas, proporcionando servicios personalizados que van más allá de la simple gestión de libros contables.
        <div class="text-2xl md:text-4xl font-bold text-center mb-4 md:mb-8 text-gray-900">Nuestro Enfoque:</div>
        <p class="text-base md:text-lg text-gray-700 max-w-3xl mx-auto mb-4 md:mb-8">
        La contabilidad efectiva es la piedra angular de cualquier empresa exitosa. En PACIOLI, no solo nos limitamos a registrar transacciones; nos sumergimos en tus cifras para comprender la historia que cuentan. Nuestro enfoque proactivo significa que no solo proporcionamos informes precisos y oportunos, sino que también ofrecemos asesoramiento estratégico basado en datos para respaldar tus decisiones financieras clave.
        <div class="text-2xl md:text-4xl font-bold text-center mb-4 md:mb-8 text-gray-900"></div>
        <div class="flex flex-col sm:flex-row sm:space-x-4 justify-center">
            <div class="bg-yellow-500 p-4 rounded-lg mb-4 sm:mb-0">
                <div class="text-lg md:text-xl font-bold text-gray-900">Gestión de Libros Contables</div>
            </div>
            <div class="bg-yellow-500 p-4 rounded-lg mb-4 sm:mb-0">
                <div class="text-lg md:text-xl font-bold text-gray-900">Análisis Financiero</div>
            </div>
            <div class="bg-yellow-500 p-4 rounded-lg">
                <div class="text-lg md:text-xl font-bold text-gray-900">Presupuestos y Planificación Financiera</div>
            </div>
        </div>
    </section>

    <!-- Clientes -->
    <section id="clientes" class="clientes">
        <div class="tarjet">
            <img src="../images/asesoramiento.avif" alt="portada">
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
