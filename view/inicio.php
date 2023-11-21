
<?php
error_reporting(0);
session_start();
$id = $_SESSION['id_usuario'];
if ($id == null || $id == '0') {
    echo 'Error al iniciar sesión';
    die();
}
error_reporting(0);
$ID = $_SESSION['id_usuario'];
$admin = $_SESSION['id_usuarioAdm'];
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
    <link rel="stylesheet" href="../css/styles-notificacion.css">
    <title>Document</title>
</head>

<body>
    <section id="inicio" class="body">
        <header class="nav">
            <h1 class="icon">
                <a class="sub" href="Home.php">PACIOLI</a>
            </h1>
        </header> 
        <div class="title-b title-vertical">
            Despacho contable PACIOLI
        </div>
        <h1 class="title-b title-vertical">Bienvenido <?php echo $_SESSION['nombre'];?>!!</h1>
        <a accesskey="r" href="#nosotros"><div class="arrow slider-arrow ">↓</div></a>
    </section>
    <!-- citas -->

    <section id="nosotros" class="bg-gray-100 py-8 md:py-16">
        <div class="text-2xl md:text-4xl font-bold text-center mb-4 md:mb-8 text-gray-900">Citas</div>
        <p class="text-base md:text-lg text-gray-700 max-w-3xl mx-auto mb-4 md:mb-8">
        Nos encontramos comprometidos en brindar el mejor servicio a nuestros apreciados clientes, y es por ello que nos esforzamos al máximo para atender sus necesidades de manera eficiente. Con el objetivo de facilitar la planificación de sus citas, compartimos con usted nuestras fechas que ya no se encuentran disponibles. Le recomendamos considerar estas opciones al solicitar sus citas, asegurándole una atención oportuna y de calidad. Agradecemos su confianza y estamos aquí para asistirle en cada paso de su experiencia con nosotros.Si no encuentra una cita que se adapte a su horario puede esperar, todos los lunes salen nuevas fechas.
        </p>
        <div class="flex items-center justify-center space-x-4 flex-wrap">
            <?php
            include('../CONTROLLER/conexionbd.php');
            $citas = "SELECT *  FROM citas where usuario != 3";
            $resultado = mysqli_query($conexion, $citas);
             while($row=mysqli_fetch_assoc($resultado)) {
            ?>
            <div class="bg-red-700 p-4 rounded-lg mb-4">
                <div class="text-lg md:text-xl font-bold text-gray-900"><?php echo $row['fecha'];?></div>
                <div class="text-lg md:text-xl font-bold text-gray-900"><?php echo $row['hora'];?></div>
            </div>
            <?php
            }
             ?>
        </div>
    </section>
    <section id="nosotros" class="bg-gray-100 py-8 md:py-16">
        <div class="text-2xl md:text-4xl font-bold text-center mb-4 md:mb-8 text-gray-900">Agendar cita</div>
        <p class="text-base md:text-lg text-gray-700 max-w-3xl mx-auto mb-4 md:mb-8">
        Con el objetivo de facilitar la planificación de sus citas, compartimos con usted nuestras fechas disponibles.
        </p>
        <div class="flex items-center justify-center space-x-4 flex-wrap">
            <?php
            include('../CONTROLLER/conexionbd.php');
            $citas_query = "SELECT * FROM citas WHERE usuario = $ID";
            $citas_result = mysqli_query($conexion, $citas_query);
            $citas = "SELECT *  FROM citas where usuario = 3";
            if (mysqli_num_rows($citas_result) > 0) {
                echo '<div class="text-lg md:text-xl font-bold text-gray-900">Ya tiene una cita programada.</div> <a href="miCita.php" class="inline-block"><button class="bg-gray-900 text-white px-4 py-2 rounded">Ver</button></a>';
            } else {
            $resultado = mysqli_query($conexion, $citas);
             while($row=mysqli_fetch_assoc($resultado)) {
            ?>
            <div class="bg-yellow-500 p-4 rounded-lg mb-4">
                <div class="text-lg md:text-xl font-bold text-gray-900"><?php echo $row['fecha'];?></div>
                <div class="text-lg md:text-xl font-bold text-gray-900"><?php echo $row['hora'];?></div>
                <a href="cita.php?id=<?php echo $row["id_cita"];?>" class="inline-block"><button class="bg-gray-900 text-white px-4 py-2 rounded">Tomar fecha</button></a>
            </div>
            <?php
            }
        }
             ?>
        </div>
    </section>


    <!--Cotizaciones-->
    <section id="nosotros" class="bg-gray-100 py-8 md:py-16">
        <div class="text-2xl md:text-4xl font-bold text-center mb-4 md:mb-8 text-gray-900">Cotizaciones</div>
        <p class="text-base md:text-lg text-gray-700 max-w-3xl mx-auto mb-4 md:mb-8">
        Le recordamos que el costo final puede variar en función de las características específicas del servicio. En virtud de ello, le extendemos una cordial invitación a agendar una cita con nosotros. Este encuentro nos permitirá proporcionarle información más detallada acerca de nuestras tarifas y discutir pormenores relativos a sus necesidades particulares. Estamos a su disposición para brindarle la asesoría necesaria y responder a cualquier pregunta que pueda tener. Quedamos a la espera de su amable confirmación para coordinar una reunión que se ajuste a su conveniencia. Agradecemos de antemano su interés y confianza en nuestros servicios.
        </p>
        <form id="cotizacionForm" class="max-w-md mx-auto bg-white p-4 rounded shadow-md">
    <div class="mb-4">
      <label for="tiempoTrabajo" class="block text-gray-700 text-sm font-bold mb-2">Tiempo Aproximado de Trabajo (meses):</label>
      <input type="number" id="tiempoTrabajo" name="tiempoTrabajo" min="1" class="w-full p-2 border text-gray-900 rounded"required>
    </div>

    <div class="mb-4">
      <label for="cantidadPersonal" class="block text-gray-700 text-sm font-bold mb-2">Cantidad de Personal Solicitado:</label>
      <input type="number" id="cantidadPersonal" name="cantidadPersonal" min="1" class="w-full p-2 border text-gray-900 rounded" required>
    </div>

    <div class="mb-4">
      <label for="tipoServicio" class="block text-gray-700 text-sm font-bold mb-2">Tipo de Servicio:</label>
      <select id="tipoServicio" name="tipoServicio" class="w-full p-2 border text-gray-900 rounded">
        <option value="auditoria">Auditoría</option>
        <option value="impuestos">Declaración de Impuestos</option>
        <option value="asesoramiento">Asesoramiento Contable</option>
      </select>
    </div>

    <button type="button" onclick="calcularCotizacion()" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">Calcular Cotización</button>
  </form>

  <p id="resultado" class="text-base md:text-lg text-gray-700 max-w-3xl mx-auto mb-4 md:mb-8d"></p>

  <script>
    function calcularCotizacion() {
      var tiempoTrabajo = document.getElementById('tiempoTrabajo').value;
      var cantidadPersonal = document.getElementById('cantidadPersonal').value;
      var tipoServicio = document.getElementById('tipoServicio').value;

      var tarifaBase = obtenerTarifaBase(tipoServicio);
      var total = tiempoTrabajo * cantidadPersonal * tarifaBase;

      document.getElementById('resultado').innerHTML = 'Cotización: $' + total.toFixed(2);
    }

    function obtenerTarifaBase(tipoServicio) {
      var tarifas = {
        'auditoria': 500,
        'impuestos': 350,
        'asesoramiento': 200
      };
      return tarifas[tipoServicio] || 0;
    }
  </script>
    <!-- -->
    <!-- footer--->
    <footer class="text-white py-8">
        <div class="text-2xl md:text-4xl font-bold text-center mb-4 md:mb-8 text-gray-900">PACIOLI</div>
        <a href="sugerencia.php"><p class="text-base md:text-lg text-gray-400 text-center mb-4 md:mb-8">Enviar comentarios</p></a>
        <div class="flex justify-center items-center flex-col md:flex-row">
            <a href="../controller/cerrarSession.php"><button class="bg-gray-900 text-white px-4 py-2 rounded mb-2 md:mb-0 md:mr-2">Cerrar Sesión</button></a>
            <a href="#inicio" class="inline-block"><button class="bg-gray-900 text-white px-4 py-2 rounded">Regresar al Inicio</button></a>
        </div>
        <a href="sugerencia.php"><p class="text-base md:text-lg text-gray-400 text-center mb-4 md:mb-8">Solicitar cuenta empresa</p></a>
    </footer>
</body>
</html>