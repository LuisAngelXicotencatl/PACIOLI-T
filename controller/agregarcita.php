<?php
include("conexionbd.php");
$cita = $_POST["responsable"];
$fecha = $_POST["fecha"];
$hora = $_POST["hora"];
$usuario = '3';
$oficina = $_POST["oficina"];
$descripcion = "";

$crear = "INSERT INTO `citas` (`id_cita`, `fecha`, `hora`, `responsable`, `oficina`, `usuario`, `descripcion`) VALUES (NULL, '$fecha', '$hora', '$cita', '$oficina', '$usuario', '')";

$resultado = mysqli_query($conexion, $crear);
if($resultado) {
    header("location: ../view/inicioAdmin.php");
} else {
    echo "<script>alert('Error citas'); window.history.go(-1);</script>";
}