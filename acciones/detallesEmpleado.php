<?php
require_once("../php/conexion_be.php");
$id = $_GET['id'];

// Consultar la base de datos para obtener los detalles del empleado
$sql = "SELECT * FROM usuarios WHERE id = $id LIMIT 1";
$query = $conexion->query($sql);
$usuario = $query->fetch_assoc();

// Devolver los detalles del empleado como un objeto JSON
header('Content-type: application/json; charset=utf-8');
echo json_encode($usuario);
exit;
