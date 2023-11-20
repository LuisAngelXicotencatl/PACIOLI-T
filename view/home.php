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
    <section id="inicio" class="body">
        <header class="nav">
            <h1 class="icon">
                <a class="sub" href="Home.php">PACIOLI</a>
                <a class="sub" href="perfil.php"><!--<?php echo $_SESSION['nombre'];?>--></a>
            </h1>
            <nav>
                <ul>
                    <li><a accesskey="r" href="#nosotros">Nosotros</a></li>
                    <li><a accesskey="c" href="#clientes">Testimonios</a></li>
                </ul>
            </nav>
        </header> 
        <div class="title-b title-vertical">
            Despacho contable PACIOLI
        </div>
        <a accesskey="r" href="#nosotros"><div class="arrow slider-arrow ">↓</div></a>
    </section>

    <!-- Nosotros -->
    <section id="nosotros" class="bg-gray-100 py-8 md:py-16">
        <div class="text-2xl md:text-4xl font-bold text-center mb-4 md:mb-8 text-gray-900">Nosotros</div>
        <p class="text-base md:text-lg text-gray-700 max-w-3xl mx-auto mb-4 md:mb-8">
            Trabajamos estrechamente con nuestros clientes para comprender su negocio y sus riesgos potenciales, con el fin de proporcionar soluciones integrales y estratégicas basadas en el proceso de auditoría. Nuestro enfoque colaborativo garantiza la implementación de medidas efectivas y eficientes para mejorar la eficacia de su negocio y reducir los riesgos. Nos especializamos en revisiones integrales de estados financieros con el propósito de emitir una opinión profesional sobre su razonabilidad y riesgos de acuerdo a las técnicas y reglas contables.
        </p>
        <div class="text-2xl md:text-4xl font-bold text-center mb-4 md:mb-8 text-gray-900">Nuestros servicios principales</div>
        <div class="flex flex-col sm:flex-row sm:space-x-4 justify-center">
            <div class="bg-yellow-500 p-4 rounded-lg mb-4 sm:mb-0">
                <div class="text-lg md:text-xl font-bold text-gray-900">Auditoria</div>
            </div>
            <div class="bg-yellow-500 p-4 rounded-lg mb-4 sm:mb-0">
                <div class="text-lg md:text-xl font-bold text-gray-900">Declaracion de impuestos</div>
            </div>
            <div class="bg-yellow-500 p-4 rounded-lg">
                <div class="text-lg md:text-xl font-bold text-gray-900">Asesoramiento contable</div>
            </div>
        </div>
    </section>

    <!-- Clientes -->
    <section id="clientes" class="clientes">
        <div class="tarjet">
            <img  class="p-c" src="../images/admin.jpg" alt="portada">
            <div class="title-clientes">Miryam</div>
            <div class="p-clientes">Yo quiero expresar mi plena satisfacción con los servicios de contabilidad proporcionados por PACIOLI. Desde el inicio de nuestra colaboración, he experimentado un nivel de profesionalismo y dedicación excepcionales.
El equipo de contadores de PACIOLI ha demostrado un profundo conocimiento de las complejidades contables, manteniendo al mismo tiempo una comunicación clara y efectiva. Han sido diligentes en la gestión de nuestras transacciones financieras, asegurándose de que todos los registros sean precisos y estén al día.</div>
            <div class="title-clientes">★★★★★</div>
        </div>
        <button class="bg-yellow-500 text-white px-4 py-2 rounded ">ver mas</button>
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
            <a href="#inicio" class="inline-block"><button class="bg-gray-900 text-white px-4 py-2 rounded">Regresar al Inicio</button></a>
        </div>
    </footer>
</body>
</html>
