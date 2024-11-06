<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("../php/conexion_be.php");

    $id = trim($_POST['id']); // Asegúrate de recibir el ID del empleado que se actualizará
    $cedula = trim($_POST['cedula']);
    $nombre_completo = trim($_POST['nombre_completo']);
    $correo = trim($_POST['correo']);
    $usuario = trim($_POST['usuario']);
    $nombre_completo = trim($_POST['tipo_persona']);
    $telefono = trim($_POST['telefono']);

    $avatar = null;

    // Verifica si se ha subido un nuevo archivo de avatar
    if (isset($_FILES['avatar']) && $_FILES['avatar']['size'] > 0) {
        $archivoTemporal = $_FILES['avatar']['tmp_name'];
        $nombreArchivo = $_FILES['avatar']['name'];

        $extension = strtolower(pathinfo($nombreArchivo, PATHINFO_EXTENSION));

        // Genera un nombre único y seguro para el archivo
        $dirLocal = "fotos_empleados";
        $nombreArchivo = substr(md5(uniqid(rand())), 0, 10) . "." . $extension;
        $rutaDestino = $dirLocal . '/' . $nombreArchivo;

        if (move_uploaded_file($archivoTemporal, $rutaDestino)) {
            $avatar = $nombreArchivo;
        }
    }

    // Actualiza los datos en la base de datos
    $sql = "UPDATE usuarios 
            SET cedula='$cedula', nombre_completo='$nombre_completo', correo='$correo', usuario='$usuario', tipo_persona='$tipo_persona', telefono='$telefono'";

    // Si hay un nuevo avatar, actualiza su valor
    if ($avatar !== null) {
        $sql .= ", avatar='$avatar'";
    }

    $sql .= " WHERE id='$id'";

    if ($conexion->query($sql) === TRUE) {
        header("location:../");
    } else {
        echo "Error al actualizar el registro: " . $conexion->error;
    }
}
