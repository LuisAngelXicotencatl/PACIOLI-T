<?php
include("conexionbd.php");
$cita = $_POST["cita"];
$fecha = $_POST["fecha"];
$hora = $_POST["hora"];



$sugerencias = "UPDATE `citas` SET `fecha` = '$fecha', `hora` = '$hora' WHERE `citas`.`id_cita` = $cita";

$resultado = mysqli_query($conexion, $sugerencias);
if($resultado) {
    header("location: ../view/inicioAdmin.php");
} else {
    echo "<script>alert('Error'); window.history.go(-1);</script>";
}