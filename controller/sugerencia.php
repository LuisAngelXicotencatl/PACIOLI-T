<?php
include("conexionbd.php");
session_start();
$idusuario = $_SESSION['id_usuario'];
$descripcion = $_POST["descripcion"];



$sugerencias = "INSERT INTO `sugerencias` (`id_sugerencias`, `id_usuarios`, `sugerencia`) VALUES (NULL, '$idusuario', '$descripcion');";


$resultado = mysqli_query($conexion, $sugerencias);
if($resultado) {
    header("location: ../view/inicio.php");
} else {
    echo "<script>alert('Error'); window.history.go(-1);</script>";
}