<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    include("../php/conexion_be.php");

    // Obtener el ID de empleado de la solicitud GET y asegurarse de que sea un entero
    $IdUsuario= (int)$_GET['id'];

    // Realizar la consulta para obtener los detalles del empleado con el ID proporcionado
    $sql = "SELECT * FROM usuarios WHERE id = $IdUsuario LIMIT 1";
    $resultado = $conexion->query($sql);

    // Verificar si la consulta se ejecutó correctamente
    if (!$resultado) {
        // Manejar el error aquí si la consulta no se ejecuta correctamente
        echo json_encode(["error" => "Error al obtener los detalles del usuario: " . $conexion->error]);
        exit();
    }

    // Obtener los detalles del empleado como un array asociativo
    $usuario = $resultado->fetch_assoc();

    // Devolver los detalles del empleado como un objeto JSON
    header('Content-type: application/json; charset=utf-8');
    echo json_encode($usuario);
    exit;
}
