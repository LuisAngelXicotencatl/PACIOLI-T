<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <title>Conversación Responsiva</title>
  <style>
    /* Agrega estilos adicionales según sea necesario */
  </style>
</head>
<body class="bg-gray-100 p-4">

  <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-lg">

    <!-- Encabezado de la conversación -->
    <div class="bg-gray-200 py-2 px-4">
      <h1 class="text-lg font-semibold text-gray-700">Conversación Responsiva</h1>
    </div>

    <!-- Mensajes de la conversación -->
    <div class="p-4">
      <!-- Mensaje del usuario -->
      <div class="flex justify-end mb-2">
        <div class="bg-blue-500 text-white p-2 rounded-md max-w-xs">
          <p>Hola, ¿cómo estás?</p>
        </div>
      </div>

      <!-- Mensaje de respuesta -->
      <div class="flex mb-2">
        <div class="bg-gray-300 p-2 rounded-md max-w-xs">
          <p>¡Hola! Estoy bien, gracias por preguntar.</p>
        </div>
      </div>

      <!-- Agrega más mensajes según sea necesario -->

    </div>

    <!-- Entrada de mensaje -->
    <div class="bg-gray-200 p-4">
      <input type="text" placeholder="Escribe tu mensaje..." class="w-full px-2 py-1 border rounded-md">
      <button class="mt-2 px-4 py-2 bg-blue-500 text-white rounded-md">Enviar</button>
    </div>

  </div>

</body>
</html>
