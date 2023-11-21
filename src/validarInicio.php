<!-- METODO CONECTADO A LOGIN PARA REALIZAR LA VALIDACICON DE CAMPOS*/ -->
<?php
error_reporting(0);
include('../controller/conexionbd.php');
$nombre=$_POST['nombre'];
$password=$_POST['password'];

session_start();
$_SESSION['nombre']= $nombre;

$consulta="SELECT*FROM usuarios where nombre='$nombre' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

if (mysqli_num_rows($resultado) == 1) {
  $fila = mysqli_fetch_assoc($resultado);
  $id_usuario = $fila['id_usuario'];

  $_SESSION['id_usuario']= $id_usuario;

  $consultaAdm = "SELECT * FROM contador WHERE id_usuario = '$id_usuario'";
  $resultadoAdm=mysqli_query($conexion,$consultaAdm);

  $consultaEmpresa = "SELECT * FROM empresa WHERE id_usuario = '$id_usuario'";
  $resultadoEmpresa=mysqli_query($conexion,$consultaEmpresa);

  if (mysqli_num_rows($resultadoAdm) == 1){
    $filaadmin = mysqli_fetch_assoc($resultadoAdm);
    $id_usuarioAdmin = $filaadmin['id_usuario'];
    
    $_SESSION['id_usuarioAdm']= $id_usuarioAdmin;
    header("location: ../view/inicioAdmin.php");
  } else if(mysqli_num_rows($resultadoEmpresa) == 1){
    $filaempresa = mysqli_fetch_assoc($resultadoEmpresa);
    $id_Empresa = $filaempresa['id_empresa'];
    $id_usuarioEmpresa = $filaempresa['id_usuario'];
    
    $_SESSION['id_Empresa']= $id_Empresa;
    $_SESSION['id_usuarioEmpresa']= $id_usuarioEmpresa;
    header("location: ../view/inicioEmpresas.php");
  }else{
    header("location: ../view/inicio.php");
  }

}else{
    ?>
    <?php
    include("index.php");
  ?>
  <h1 class="bad">USUARIO o PASSWORD NO EXISTEN</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);


/*<!-- 
──────────▄
────────▄██
─▄▀██▀█▀█▀███▀ 
▀▀▀▀▀████▀▀▀
──────▀██
-->*/