<?php
include("conexionbd.php");
session_start();
$cita = $_GET['id'];


$eliminarcitaEm = "DELETE FROM citas WHERE citas.id_cita = '$cita'";

$resultado = mysqli_query($conexion, $eliminarcitaEm );
if($resultado) {
    header("location: ../view/inicioEmpresas.php");
} else {
    echo "<script>alert('Error $cita'); window.history.go(-1);</script>";
}