<?php
include("conexionbd.php");
session_start();
$cita = $_SESSION['id_cita'];
$idusuario = $_SESSION['id_usuario'];