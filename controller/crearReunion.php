<?php
include("conexionbd.php");
$empresa = $_POST["empresa"];
$fecha = $_POST["fecha"];
$hora = $_POST["hora"];
$descripcion = $_POST["descripcion"];
$contador = $_POST["contador"];


$crearreunion = "INSERT INTO `reuniones` (`id_reunion`, `id_empresa`, `fecha`, `hora`, `descripcion`, `id_contador`) VALUES (NULL, '$empresa', '$fecha', '$hora', '$descripcion', '$contador')";


$resultado = mysqli_query($conexion, $crearreunion);
if($resultado) {
    header("location: ../view/inicioAdmin.php");
} else {
    echo "<script>alert('Error citas'); window.history.go(-1);</script>";
}
