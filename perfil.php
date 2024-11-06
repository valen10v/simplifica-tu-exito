<?php
session_start();

// Verifica si el usuario está logueado
if (!isset($_SESSION['usuario'])) {
    exit(); // Redirige si no está logueado
}

include("php/conexion_be.php");  // Incluye el archivo de conexión
echo 'Usuario en sesión: ' . $_SESSION['usuario']; // Esto debería mostrar el nombre de usuario en sesión


echo "Consulta SQL: SELECT id, cedula, nombre_completo, correo, usuario, contrasena, id_cargo, tipo_persona, telefono, avatar 
FROM usuarios WHERE id = '$usuario'";

// Obtener el nombre de usuario desde la sesión
$usuario = $_SESSION['usuario'];

// Consulta para obtener los datos del perfil
 $query = "SELECT id, cedula, nombre_completo, correo, usuario, contrasena, id_cargo, tipo_persona, telefono, avatar
FROM usuarios WHERE usuario = '$usuario'";

// Ejecutar la consulta
$result = mysqli_query($conexion, $query);

// Verifica si se encontró al usuario
if (mysqli_num_rows($result) > 0) {
$usuario = mysqli_fetch_assoc($result);
} else {
echo "Usuario no encontrado.";
exit();
}

// Mostrar el perfil
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <style>
        /* Estilos básicos */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }

        .profile-info {
            margin-top: 20px;
        }

        .profile-info div {
            margin-bottom: 10px;
        }

        .profile-info label {
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Perfil de Usuario</h2>

        <!-- Avatar -->
        <div style="text-align:center;">
            <?php if ($usuario['avatar']) { ?>
                <img src="uploads/avatars/<?= htmlspecialchars($usuario['avatar']) ?>" alt="Avatar" class="avatar">
            <?php } else { ?>
                <img src="default-avatar.png" alt="Avatar" class="avatar">
            <?php } ?>
        </div>

        <!-- Información del usuario -->
        <div class="profile-info">
            <div><label>ID:</label> <?= htmlspecialchars($usuario['id']) ?></div>
            <div><label>Cédula:</label> <?= htmlspecialchars($usuario['cedula']) ?></div>
            <div><label>Nombre Completo:</label> <?= htmlspecialchars($usuario['nombre_completo']) ?></div>
            <div><label>Correo:</label> <?= htmlspecialchars($usuario['correo']) ?></div>
            <div><label>Usuario:</label> <?= htmlspecialchars($usuario['usuario']) ?></div>
            <div><label>Cargo ID:</label> <?= htmlspecialchars($usuario['id_cargo']) ?></div>
            <div><label>Tipo de Persona:</label> <?= htmlspecialchars($usuario['tipo_persona']) ?></div>
            <div><label>Teléfono:</label> <?= htmlspecialchars($usuario['telefono']) ?></div>
            <div><label>Contraseña:</label> <em>(No se muestra por razones de seguridad)</em></div>
        </div>

    </div>

</body>

</html>