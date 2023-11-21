<?php
include("conexionbd.php");
$nombre = $_POST["nombre"];
$password = $_POST["password"];
$correo = $_POST["correo"];
$portada = addslashes(file_get_contents($_FILES['portada']['tmp_name']));
$apellidoAp = $_POST['apellidoAp'];
$apellidoAm = $_POST["apellidoAm"];
$direccion = $_POST["direccion"];
$celular = $_POST["celular"];
$telefono = $_POST["telefono"];

$crearusuario = "INSERT INTO `usuarios` (`id_usuario`, `nombre`, `password`, `correo`,`portada`, `apellidoAp`, `apellidoAm`, `direccion`, `celular`, `telefono`) 
VALUES (NULL, '$nombre', '$password', '$correo', '$portada', '$apellidoAp', '$apellidoAm', '$direccion', '$celular', '$telefono')";

$resultado = mysqli_query($conexion, $crearusuario);
if($resultado) {
    echo "<script>alert('Registro exitoso'); window.history.go(-2);</script>";
} else {
    echo "<script>alert('Error citas'); window.history.go(-1);</script>";
}