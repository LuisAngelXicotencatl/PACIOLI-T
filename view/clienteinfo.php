<?php
include("../controller/conexionbd.php");
$id = $_GET["id"];
$info = "SELECT * FROM usuarios where id_usuario = '$id'";
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
<header class="nav">
        <h1 class="icon">
            <a class="sub" href="inicioAdmin.php">PACIOLI</a>
        </h1>
</header> 
  <div class="container bg-gray-900 mx-auto mt-8">
    <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
       <?php $resultado = mysqli_query($conexion, $info);
      while($row=mysqli_fetch_assoc($resultado)) { ?>
      <h2 class="text-2xl text-blue-900 font-semibold mb-6">Información Personal</h2>
      <img class="rounded-full w-16 h-16" src="data:image/jpg;base64,<?php echo base64_encode($row['portada']); ?>" alt="portada">
      <div class="mb-4">
        <label for="nombre" class="block text-gray-900 font-medium mb-2">Nombre: <?php echo $row['nombre'];?></label>
      </div>
      <div class="mb-4">
        <label for="apellidoAp" class="block text-gray-700 font-medium mb-2">Apellido Paterno: <?php echo $row['apellidoAp'];?></label>
      </div>
      <div class="mb-4">
        <label for="apellidoAm" class="block text-gray-700 font-medium mb-2">Apellido Materno: <?php echo $row['apellidoAm'];?></label>
      </div>
      <div class="mb-4">
        <label for="correo" class="block text-gray-700 font-medium mb-2">Correo: <?php echo $row['correo'];?></label>
      </div>
      <div class="mb-4">
        <label for="direccion" class="block text-gray-700 font-medium mb-2">Dirección: <?php echo $row['direccion'];?></label>
      </div>
      <div class="mb-4">
        <label for="celular" class="block text-gray-700 font-medium mb-2">Celular: <?php echo $row['celular'];?></label>
      </div>
      <div class="mb-4">
        <label for="telefono" class="block text-gray-700 font-medium mb-2">Teléfono: <?php echo $row['telefono'];?></label>
      </div>
      <?php } ?>
    </div>
</div>
</body>