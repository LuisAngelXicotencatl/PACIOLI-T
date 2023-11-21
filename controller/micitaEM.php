<?php
include("conexionbd.php");
$fecha = $_POST["fecha"];
$hora = $_POST["hora"];
$responsable = $_POST["responsable"];
$oficina = $_POST["oficina"];
$usuario = $_POST["usuario"];
$descripcion = $_POST["descripcion"];

$crearEm = "INSERT INTO `citas` (`id_cita`, `fecha`, `hora`, `responsable`, `oficina`, `usuario`, `descripcion`) VALUES (NULL, '$fecha', '$hora', '$responsable', '$oficina', '$usuario', '$descripcion')";


$resultado = mysqli_query($conexion, $crearEm);
if($resultado) {
    header("location: ../view/inicioEmpresas.php");
} else {
    echo "<script>alert('Error citas $descripcion, $usuario, $oficina, $responsable, $hora, $fecha'); window.history.go(-1);</script>";
}