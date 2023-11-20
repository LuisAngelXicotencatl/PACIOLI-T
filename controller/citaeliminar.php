<?php
include("conexionbd.php");
session_start();
$cita = $_SESSION['id_cita'];
$idusuario = '3';
$descripcion = "";

$registercita = "UPDATE `citas` SET `usuario` = '$idusuario', `descripcion` = '$descripcion' WHERE `citas`.`id_cita` = $cita";

$resultado = mysqli_query($conexion, $registercita);
if($resultado) {
    header("location: ../view/inicio.php");
} else {
    echo "<script>alert('Error'); window.history.go(-1);</script>";
}