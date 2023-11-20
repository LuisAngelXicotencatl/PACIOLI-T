<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <title>Document</title>
</head>
<body class="font-sans bg-white">
    <section class="min-h-screen flex flex-col items-center justify-center">
        <header class="w-full bg-blue-500 p-4 fixed top-0 flex justify-between items-center">
            <h1 class="text-white text-lg"><a class="hover:text-gray-300" href="Home.php">PACIOLI</a><a class="hover:text-gray-300" href="perfil.php"><!--<?php echo $_SESSION['nombre'];?>--></a></h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a class="text-white" href="#citas">Citas</a></li>
                    <li><a class="text-white" href="#testimonio">Testimonios</a></li>
                </ul>
            </nav>
        </header> 
        <div class="text-4xl font-bold text-center my-16">
            Despacho contable PACIOLI
        </div>
        <a accesskey="r" href="#nosotros"><div class="bg-blue-500 text-white p-2 rounded-full mb-10">↓</div></a>
    </section>

    <section id="nosotros" class="bg-gray-100 py-16">
        <div class="text-4xl font-bold text-center mb-8 font-black">Nosotros</div>
        <p class="text-lg text-gray-700 max-w-3xl mx-auto mb-8">
            Trabajamos estrechamente con nuestros clientes para comprender su negocio y sus riesgos potenciales, con el fin de proporcionar soluciones integrales y estratégicas basadas en el proceso de auditoría. Nuestro enfoque colaborativo garantiza la implementación de medidas efectivas y eficientes para mejorar la eficacia de su negocio y reducir los riesgos. Nos especializamos en revisiones integrales de estados financieros con el propósito de emitir una opinión profesional sobre su razonabilidad y riesgos de acuerdo a las técnicas y reglas contables.
        </p>
        <div class="text-4xl font-bold text-center mb-8">Nuestros servicios principales</div>
        <div class="flex space-x-4 justify-center">
            <div class="bg-yellow-500 p-4 rounded-lg">
                <div class="text-xl font-bold">Auditoria</div>
            </div>
            <div class="bg-yellow-500 p-4 rounded-lg">
                <div class="text-xl font-bold">Declaracion de impuestos</div>
            </div>
            <div class="bg-yellow-500 p-4 rounded-lg">
                <div class="text-xl font-bold">Asesoramiento contable</div>
            </div>
        </div>
    </section>

    <section class="bg-blue-500 text-white py-16">
        <div class="relative tarjet">
            <img class="absolute top-0 left-0 w-12 h-12 rounded-full" src="../images/admin.jpg" alt="Usuario1">
            <div class="text-2xl font-bold mb-2">Usuario1</div>
            <p class="text-lg">Gracias a un sistema unificado en donde hay más de un contador, un despacho contable toma menos tiempo en procesar datos fiscales y llevar a cabo la contabilidad, así como la calidad de la información es mayor y mejor organizada.</p>
        </div>
    </section>
    <!--cita-->
</body>
</html>
