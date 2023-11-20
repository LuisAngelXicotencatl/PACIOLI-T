<?php
include("conexionbd.php");
session_start();
$id = $_GET["id"];
$_SESSION['id_cita']= $id;
$cita = $_SESSION['id_cita'];

$reliminarM = "DELETE FROM citas WHERE `citas`.`id_cita` = $cita";


$resultado = mysqli_query($conexion, $reliminarM);
if($resultado) {
    header("location: ../view/inicioAdmin.php");
} else {
    echo "<script>alert('Error'); window.history.go(-1);</script>";
}