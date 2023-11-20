<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <style>
        /* Puedes agregar estilos adicionales aquí */
    </style>
</head>
<body class="bg-gray-900">

<div class="container mx-auto mt-8">
    <div class="max-w-md mx-auto bg-white rounded p-8 shadow-md">
    <img class="mx-auto h-10 w-auto" src="../images/logo.png" alt="Your Company">
        <h1 class="text-2xl font-bold mb-6">Registro de Usuario</h1>
        
        <form action="/tu/endpoint/de/almacenamiento" method="post">
            <!-- Nombre -->
            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-600">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-600">Contraseña</label>
                <input type="password" id="password" name="password" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <!-- Correo -->
            <div class="mb-4">
                <label for="correo" class="block text-sm font-medium text-gray-600">Correo Electrónico</label>
                <input type="email" id="correo" name="correo" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <!-- Portada -->
            <div class="mb-4">
                <label for="portada" class="block text-sm font-medium text-gray-600 ">Portada</label>
                <input type="file" id="portada" name="portada" class="mt-1 p-2 w-full border rounded-md ">
            </div>

            <!-- Apellido Paterno -->
            <div class="mb-4">
                <label for="apellidoAp" class="block text-sm font-medium text-gray-600">Apellido Paterno</label>
                <input type="text" id="apellidoAp" name="apellidoAp" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <!-- Apellido Materno -->
            <div class="mb-4">
                <label for="apellidoAm" class="block text-sm font-medium text-gray-600">Apellido Materno</label>
                <input type="text" id="apellidoAm" name="apellidoAm" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <!-- Dirección -->
            <div class="mb-4">
                <label for="direccion" class="block text-sm font-medium text-gray-600">Dirección</label>
                <textarea id="direccion" name="direccion" rows="4" class="mt-1 p-2 w-full border rounded-md"></textarea>
            </div>

            <!-- Botón de Enviar -->
            <div class="flex items-center justify-end">
                <button type="submit" class="bg-gray-900 text-white px-4 py-2 rounded-md">Enviar</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
